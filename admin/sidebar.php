<div class="sidebar-backdrop"></div>
<div class="page-wrapper">
    <header class="header">
        <div class="header__inner">
            <div class="container-fluid">
                <div class="header__row row justify-content-between">
                    <div class="header__col-left col d-flex align-items-center">
                        <div class="header__left-toggle">
                            <button class="header__toggle-menu toggle-sidebar" type="button">
                                <svg class="icon-icon-menu">
                                    <use xlink:href="#icon-menu"></use>
                                </svg>
                            </button>

                        </div>
                    </div>
                    <div class="header__col-right col d-flex align-items-center">
                        <div class="header__tools">
                            <!-- <div class="header__messages header__tools-item">
                                    <a class="header__tools-toggle header__tools-toggle--bell" href="cart.php" data-tippy-content="Cart Items" >
                                        <svg class="icon-icon-cart" style="font-size: 18px;">
                                            <use xlink:href="#icon-cart"></use>
                                        </svg> <span class="" style="font-size: 10px;"><?php echo isset($_SESSION['cart_count']) ? $_SESSION['cart_count'] : '0'; ?></span>
                                    </a>
                                </div> -->
                        </div>

                        <div class="header__profile dropdown">
                            <a class="header__profile-toggle dropdown__toggle" href="#" data-toggle="dropdown">
                                <div class="header__profile-image">
                                    <?php if (isset($_SESSION['admin_profile_image'])): ?>
                                        <img src="../uploads/admins/<?php echo htmlspecialchars($_SESSION['admin_profile_image']); ?>"
                                            alt="Profile Image" />
                                    <?php else: ?>
                                        <span class="header__profile-image-text"><?php echo $admin_initials; ?></span>
                                    <?php endif; ?>
                                </div>
                                <div class="header__profile-text">
                                    <span><?php echo htmlspecialchars($admin_firstname . ' ' . $admin_lastname); ?></span>
                                </div>
                                <span class="icon-arrow-down">
                                    <svg class="icon-icon-arrow-down">
                                        <use xlink:href="#icon-arrow-down"></use>
                                    </svg>
                                </span>
                            </a>
                            <div class="profile-dropdown dropdown-menu dropdown-menu--right"><a
                                    class="profile-dropdown__item dropdown-menu__item" href="admin-profile.php"
                                    tabindex="0"><span class="profile-dropdown__icon">
                                        <svg class="icon-icon-user">
                                            <use xlink:href="#icon-user"></use>
                                        </svg></span><span>My Profile</span></a>
                                <a class="profile-dropdown__item dropdown-menu__item" href="settings.php"
                                    tabindex="0"><span class="profile-dropdown__icon">
                                        <svg class="icon-icon-settings">
                                            <use xlink:href="#icon-settings"></use>
                                        </svg></span><span>Change Password</span></a>
                                <div class="dropdown-menu__divider"></div><a
                                    class="profile-dropdown__item dropdown-menu__item" href="../scripts/logout.php"
                                    tabindex="0"><span class="profile-dropdown__icon">
                                        <svg class="icon-icon-logout">
                                            <use xlink:href="#icon-logout"></use>
                                        </svg></span><span>Logout</span></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <aside class="sidebar">
        <div class="sidebar__backdrop"></div>
        <div class="sidebar__container">
            <div class="sidebar__top">
                <div class="container container--sm">

                    <style>
                        .style-01 {
                            /* box-sizing: border-box;
        display: block; */
                            margin: 0px auto;
                            max-width: 220px;
                            min-width: 200px;
                            height: 55px;
                            font-size: 14px;
                            line-height: 55px;

                            display: flex;
                            justify-content: start;
                            /* Centers horizontally */
                            align-items: start;
                            /* Centers vertically */
                        }

                        .style-02 {
                            color: rgb(0, 127, 252);
                            text-decoration: none solid rgb(0, 127, 252);
                            box-sizing: border-box;
                            background-color: rgba(0, 0, 0, 0);
                            float: left;
                            margin-top: 9px;
                            margin-left: 5px;
                            width: 210px;
                            height: 38px;
                            background-image: url('data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iNDYxIiBoZWlnaHQ9IjU2IiBmaWxsPSJub25lIiB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciPjxwYXRoIGZpbGwtcnVsZT0iZXZlbm9kZCIgY2xpcC1ydWxlPSJldmVub2RkIiBkPSJNNjQuOTMgNDEuOTcxYzUuNzU3LTguMTA3IDE1LjczMy0yMC4yMjYgMTUuMjc0LTI4LjIyMkM3OS43ODIgMy4zMDEgNjguOTE5LS4xMDEgNTguMTM0LjAwMiA1MC42Mi4xMDEgNDMuMDc0IDIuMjUgMzcuOTgxIDQuMTQ4Yy0xNy41ODQgNi40NS0yNy45NjUgMTYuNzk3LTMzLjk3IDI4LjI0NS02LjQ2IDExLjM0OC0yLjc3NCAyMi4xOTUgMTMuNDU1IDIyLjU0NSAxMC45MDQtLjQ0IDE4LjE3OC0zLjE2OSAyNS4yMDItNi43NTUuMzgtLjE5NC4xNjYtLjc3My0uMjQ5LS42NjktNi40OTQgMS42MTItMjEuNTU1IDQuNzA3LTI4LjU3LjkyNi0uMDEtLjAwMS0uMDI3LS4wMDgtLjA0LS4wMS0uOTM0LS41LTEuOTc1LTEuMjA3LTIuNDI1LTMuMTI3LS40ODUtNC4wNSA1LjgwMi04LjI0OCA5LjQyMS05LjU5OWwtLjc1LTcuMDE3YzIuODkgMS4wOCA1Ljk3IDEuNjc2IDkuMTI3IDEuNjc2IDUuOTg5IDAgMTEuMjQ2LTIuMTM3IDE1LjE0NC01LjY4My4yNDQuNTcuNDM4IDEuMjEyLjU0NCAxLjkzNmgxLjdjLjAyNS0xLjgwMS0xLjEzNS0zLjIyOC0xLjEzNS0zLjIyOC0xLjc4Mi0yLjQyNC00LjQ0NC0yLjM4MS00LjQ0NC0yLjM4MXMxLjI2LjU5NiAyLjM2IDIuMDE0Yy05LjAxNiA3Ljk3OC0yMC4yOTggNC4wNS0yMC4yOTggNC4wNWw0LjY0My01LjE2My0xLjk2Mi00YzEwLjcyNC0zLjg5OSAxOS43NjMtNi44OTkgMzQuNzMtOS41NDZMNTYuNzQxIDUuNTFsMS42NjUtMS4wOTdjOS40NTkgMi41OSAxNS42NzMgNC40OTYgMTUuODg3IDkuMzU3LS4wNjYuODEtLjI0IDEuNzQ1LS42MiAyLjgyNi0yLjEwNiA1LjMtOS4xMzEgMTQuMTQ3LTExLjk1NCAxNy44NDctMS44NjcgMi40NDgtMy42ODggNC44NS00LjkzMSA3LjE1LTEuMjg5IDIuMy0xLjk5OCA0LjQ0Ni0xLjgyOCA2LjQ5Ny0uMDk1IDEyLjAxNCAyMS4zNyAxLjk2NCAzMS4wNjYtNC41MDEuMzEyLS4yMDguMDcyLS42ODgtLjI4NC0uNTY5LTI3LjIzIDkuMDUtMjAuODEyLTEuMDQ5LTIwLjgxMi0xLjA0OVoiIGZpbGw9IiNGNjAiLz48ZyBjbGlwLXBhdGg9InVybCgjYSkiIGZpbGw9IiNGNjAiPjxwYXRoIGQ9Ik02NC4zNTQgNDIuMTE2YzUuNzcyLTguMTI1IDE1Ljc3NS0yMC4yNzIgMTUuMzE0LTI4LjI4N0M3OS4yNDYgMy4zNTcgNjguMzUyLS4wNTMgNTcuNTM4LjA1Yy03LjUzNS4xLTE1LjEgMi4yNTQtMjAuMjA3IDQuMTU2QzE5LjcgMTAuNjcgOS4yOSAyMS4wNDIgMy4yNjkgMzIuNTE1LTMuMjA3IDQzLjg4OS40ODggNTQuNzYxIDE2Ljc2MSA1NS4xMTJjMTAuOTM0LS40NCAxOC4yMjgtMy4xNzYgMjUuMjctNi43Ny4zODItLjE5NS4xNjctLjc3NS0uMjUtLjY3MS02LjUxMSAxLjYxNS0yMS42MTQgNC43MTgtMjguNjQ2LjkyOC0uMDEyLS4wMDEtLjAyOC0uMDA4LS4wNC0uMDEtLjkzOC0uNS0xLjk4Mi0xLjIxLTIuNDMzLTMuMTMzLS40ODYtNC4wNiA1LjgxOC04LjI2OCA5LjQ0Ny05LjYyMWwtLjc1My03LjAzM2MyLjg5OCAxLjA4MyA1Ljk4NyAxLjY4IDkuMTUzIDEuNjggNi4wMDQgMCAxMS4yNzYtMi4xNDIgMTUuMTg0LTUuNjk2LjI0NC41NzIuNDM5IDEuMjE0LjU0NSAxLjk0aDEuNzA1Yy4wMjQtMS44MDYtMS4xMzgtMy4yMzYtMS4xMzgtMy4yMzYtMS43ODctMi40My00LjQ1NS0yLjM4Ny00LjQ1NS0yLjM4N3MxLjI2My41OTggMi4zNjYgMi4wMmMtOS4wNDEgNy45OTYtMjAuMzUzIDQuMDU5LTIwLjM1MyA0LjA1OWw0LjY1NS01LjE3Ni0xLjk2OC00LjAxYzEwLjc1NC0zLjkwNiAxOS44MTYtNi45MTQgMzQuODIzLTkuNTY3bC0zLjczLTIuODU5IDEuNjctMS4xYzkuNDgzIDIuNTk2IDE1LjcxNCA0LjUwOCAxNS45MjggOS4zOGExMS4yIDExLjIgMCAwIDEtLjYyMSAyLjgzMWMtMi4xMTIgNS4zMTItOS4xNTYgMTQuMTgtMTEuOTg3IDE3Ljg4OS0xLjg3IDIuNDUzLTMuNjk4IDQuODYtNC45NDQgNy4xNjYtMS4yOTIgMi4zMDUtMi4wMDQgNC40NTYtMS44MzIgNi41MTItLjA5NiAxMi4wNCAyMS40MjggMS45NjggMzEuMTQ5LTQuNTEyLjMxMy0uMjA4LjA3My0uNjg5LS4yODUtLjU3LTI3LjMwMyA5LjA3LTIwLjg2OC0xLjA1LTIwLjg2OC0xLjA1Wm0yNjYuNDc3IDcuNzU0Yy0uNTYxLS4xOS0uOTY1LS41NjMtMS4yMTQtMS4xMjMtLjI1LS41NjItLjM3NC0xLjQyMy0uMzc0LTIuNTkgMC0xLjYyLjI3OS0yLjY3Ljg0LTMuMTQ4LjU2MS0uNDc2IDEuNjEtLjcxNiAzLjE0OC0uNzE2IDEuNTM3IDAgMi41ODcuMjQgMy4xNDcuNzE2LjU2MS40NzkuODQyIDEuNTI4Ljg0MiAzLjE0OXMtLjI4MSAyLjc0NC0uODQyIDMuMjQzYy0uNTYxLjQ5OS0xLjYxLjc0OS0zLjE0Ny43NDktMS4wMzkgMC0xLjgzOS0uMDk1LTIuNC0uMjhaTTE0Ny40MTkgNS4wMWg5LjkyNXY0NS4xMTNoLTkuOTI1VjUuMDFabTE2Ljg4NiAzLjk5NWMwLTQuNjM4Ljk1LTQuOTk1IDUuNDA5LTQuOTk1czUuNDA5LjM1NyA1LjQwOSA0Ljk5NS0uODkyIDUuMTE0LTUuNDA5IDUuMTE0Yy00LjUxNyAwLTUuNDA5LS41MzUtNS40MDktNS4xMTRabS40NzYgOC40M2g5Ljg2N1Y1MC4xNWgtOS44NjdWMTcuNDM2Wm00OS4yMzEgMTYuNjQ5YzAgOS4zMzQtMi4zNzggMTYuNjQ3LTEyLjY2MSAxNi42NDctNi4wNjIgMC04LjQzOS0xLjg0Mi05LjYyOC00LjY5N2wtLjU5NSA0LjEwM2gtOS4wMzRWNC45NWg5Ljg2N3YxNi4yOTFjMS4zMDgtMS45MDIgMy45MjMtMy44MDUgOS4zOS0zLjgwNSAxMC4yODMgMCAxMi42NjEgNi4zNjIgMTIuNjYxIDE2LjY0OFptLTEwLjA0NSAwYzAtNS41ODktLjgzMi05LjQ1My02LjA2My05LjQ1M3MtNi40NzggMy4zODktNi40NzggOS40NTNjMCA2LjA2MyAxLjI0NyA5LjMzNCA2LjQ3OCA5LjMzNCA1LjIzIDAgNi4wNjMtNC4xMDMgNi4wNjMtOS4zMzRabTQ0LjI1OC02LjAxOHYyMi4wNmgtOC44NTdsLS44MzEtMy4zOWMtMS4yNDkgMi4wMjItNC4zOTkgMy45ODQtOS44NjcgMy45ODQtNi45NTUgMC0xMC45MzctMy4xNS0xMC45MzctOS44NyAwLTcuNDMyIDQuMzk5LTEwLjEwNyAxMy4zMTQtMTAuMTA3aDcuMzd2LS4xNzhjMC0zLjgwNi0xLjEyOS00LjgxNy02LjQ3OC00LjgxNy0yLjMxOCAwLTUuODk3LjE3OC04LjAzNy41MzV2LTguMjY1YzIuNDM3LS4zNTYgNy4wMjctLjUzNSA5LjI4NS0uNTM1IDEwLjk5NSAwIDE1LjAzNyAzLjUwOSAxNS4wMzcgMTAuNTgzaC4wMDFabS05LjgwOCAxMi4zMDl2LTMuMjExaC01LjY0NmMtMy45MjIgMC01LjQwOS42NTQtNS40MDkgMy4yNyAwIDIuMDgxIDEuMzY3IDIuODUzIDQuMTYxIDIuODUzIDMuNDQ3IDAgNS45NDQtMS4yNDggNi44OTQtMi45MTN2LjAwMVptNDkuMTY5LTYuMzAzYzAgOS4zMzUtMi4zNzggMTYuNjQ4LTEyLjY2MSAxNi42NDgtNi4wNjIgMC04LjQzOS0xLjg0My05LjYyNy00LjY5N2wtLjU5NSA0LjEwM2gtOS4wMzVWNC45MzloOS44Njd2MTYuMjljMS4zMDgtMS45MDEgMy45MjMtMy44MDUgOS4zOS0zLjgwNSAxMC4yODQgMCAxMi42NjEgNi4zNjMgMTIuNjYxIDE2LjY0OFptLTEwLjA0NSAwYzAtNS41ODgtLjgzMi05LjQ1Mi02LjA2My05LjQ1MlMyNjUgMjguMDA4IDI2NSAzNC4wNzJzMS4yNDggOS4zMzUgNi40NzggOS4zMzVjNS4yMyAwIDYuMDYzLTQuMTAzIDYuMDYzLTkuMzM1Wm0tMTQ5LjI4OSA1LjU5NWgtMTYuMTY3bC0zLjI2OSAxMC4zODRIOTguMDU5bDE1LjI3NC00NS4wNEgxMjcuM2wxNS4xNTcgNDUuMDRoLTEwLjk5NmwtMy4yMDktMTAuMzg0Wm0tMi44NTQtOS4yMTYtNC44MTQtMTUuNjRoLS43MTNsLTQuOTMzIDE1LjY0aDEwLjQ2Wm0xOTYuNDAxLTIuMzg0djIyLjA2aC04Ljg1N2wtLjgzMS0zLjM5Yy0xLjI0OSAyLjAyMi00LjM5OSAzLjk4NC05Ljg2NiAzLjk4NC02Ljk1NiAwLTEwLjkzOC0zLjE1LTEwLjkzOC05Ljg3IDAtNy40MzMgNC4zOTktMTAuMTA3IDEzLjMxNC0xMC4xMDdoNy4zNzF2LS4xNzljMC0zLjgwNS0xLjEzLTQuODE2LTYuNDc4LTQuODE2LTIuMzE5IDAtNS44OTguMTc4LTguMDM4LjUzNFYxOC4wMmMyLjQzNy0uMzU3IDcuMDI3LS41MzUgOS4yODUtLjUzNSAxMC45OTUgMCAxNS4wMzcgMy41MDkgMTUuMDM3IDEwLjU4M2guMDAxWm0tOS44MDcgMTIuMzA5di0zLjIxMWgtNS42NDdjLTMuOTIxIDAtNS40MDguNjU0LTUuNDA4IDMuMjcgMCAyLjA4IDEuMzY2IDIuODUzIDQuMTYgMi44NTMgMy40NDcgMCA1Ljk0NC0xLjI0OSA2Ljg5NS0yLjkxM1ptMzAuMTkxLTYuNTY4YzAtNC4zMTEuNjQ1LTcuNzA2IDEuOTM0LTEwLjE4NCAxLjI4OS0yLjQ3OCAzLjEzMy00LjIyMSA1LjUzMS01LjIyOCAyLjM5Ni0xLjAwNyA1LjQyOC0xLjUxMiA5LjA5Ni0xLjUxMiAxLjUzIDAgMy4wNTIuMDkxIDQuNTYyLjI3MiAxLjUxMS4xODIgMi43OS40MTQgMy44MzguNjk1djguNDAxYy0yLjAxNS0uNzY0LTQuMjkxLTEuMTQ4LTYuODMtMS4xNDgtMi42OTkgMC00LjY2NC42MjUtNS44OTIgMS44NzMtMS4yMyAxLjI1LTEuODQ0IDMuNTI3LTEuODQ0IDYuODMgMCAyLjI1Ny4yODIgNCAuODQ3IDUuMjI4LjU2MyAxLjIzIDEuNDIgMi4wOTYgMi41NjggMi42IDEuMTQ5LjUwNCAyLjY2OS43NTUgNC41NjMuNzU1IDIuNTM5IDAgNC44NTUtLjM4MiA2Ljk1MS0xLjE0OXY4LjIyYy0uOTY4LjM2My0yLjI4OC42NjUtMy45NTkuOTA3YTMzLjYyMiAzMy42MjIgMCAwIDEtNC44MDQuMzYzYy0zLjY2OCAwLTYuNy0uNTA1LTkuMDk2LTEuNTEyLTIuMzk4LTEuMDA2LTQuMjQyLTIuNzUtNS41MzEtNS4yMjctMS4yODktMi40NzgtMS45MzQtNS44NzMtMS45MzQtMTAuMTg1di4wMDFabTMwLjI4NyAwYzAtNC4zNTEuNjM1LTcuNzU2IDEuOTA1LTEwLjIxNSAxLjI2OC0yLjQ1NyAzLjA4Mi00LjE5IDUuNDM5LTUuMTk3IDIuMzU4LTEuMDA3IDUuMzY5LTEuNTEyIDkuMDM2LTEuNTEyczYuNjI3LjUwNSA5LjAwNSAxLjUxMmMyLjM3OCAxLjAwNyA0LjE5IDIuNzQgNS40NCA1LjE5NyAxLjI0OCAyLjQ1OSAxLjg3MyA1Ljg2MyAxLjg3MyAxMC4yMTUgMCA0LjM1Mi0uNjI1IDcuNzU3LTEuODczIDEwLjIxNC0xLjI1IDIuNDU5LTMuMDYzIDQuMTkyLTUuNDQgNS4xOTgtMi4zNzggMS4wMDctNS4zNzkgMS41MTEtOS4wMDUgMS41MTEtMy42MjYgMC02LjY3OS0uNTA0LTkuMDM2LTEuNTEtMi4zNTctMS4wMDctNC4xNy0yLjc0LTUuNDM5LTUuMTk5LTEuMjctMi40NTctMS45MDUtNS44NjItMS45MDUtMTAuMjE0Wm0xNi4zOCA5LjM2OGMxLjU3MSAwIDIuNzgtLjI4MiAzLjYyNi0uODQ3Ljg0Ny0uNTYzIDEuNDUxLTEuNTEgMS44MTMtMi44NC4zNjMtMS4zMy41NDQtMy4yMjMuNTQ0LTUuNjgxcy0uMTgxLTQuMzYxLS41NDQtNS43MTFjLS4zNjItMS4zNS0uOTc3LTIuMzE3LTEuODQzLTIuOTAyLS44NjctLjU4NC0yLjA2NS0uODc3LTMuNTk2LS44NzctMS41MzEgMC0yLjc4MS4yOTMtMy42MjYuODc3LS44NDcuNTg1LTEuNDUxIDEuNTUyLTEuODE0IDIuOTAyLS4zNjIgMS4zNS0uNTQzIDMuMjU0LS41NDMgNS43MTEgMCAyLjQ1Ny4xODEgNC4zNTEuNTQzIDUuNjgxLjM2MyAxLjMzLjk3NyAyLjI3NyAxLjg0NCAyLjg0Ljg2Ni41NjUgMi4wNjQuODQ3IDMuNTk2Ljg0N1pNNDYxIDI4LjgyNVY1MC4wNWgtMTAuMTkxVjMwLjM5MmMwLTIuMDUtLjMzMi0zLjQ1Ny0uOTk1LTQuMjIxLS42NjMtLjc2NC0xLjc5OS0xLjE0Ni0zLjQwNy0xLjE0NnMtMi44MTQuMzMyLTMuNjE4Ljk5NmMtLjgwNS42NjMtMS4zNjcgMS43MzktMS42ODkgMy4yMjZWNTAuMDVoLTEwLjE5MVYzMC4zOTJjMC0yLjA1LS4zNTItMy40NTctMS4wNTUtNC4yMjEtLjcwNC0uNzY0LTEuODItMS4xNDYtMy4zNDctMS4xNDYtMS41MjYgMC0yLjcxNC4yODItMy40MzYuODQ1LS43MjQuNTYzLTEuMjQ3IDEuNDg3LTEuNTY4IDIuNzczVjUwLjA1aC0xMC4xMzFWMTcuNDg4aDEwLjEzMXYzLjQ5OGMuODQ0LTEuMzI3IDEuOTktMi4zNDEgMy40MzctMy4wNDYgMS40NDctLjcwMyAzLjMzNi0xLjA1NSA1LjY2OC0xLjA1NSAyLjMzMiAwIDQuMzExLjM1MiA1LjgxOSAxLjA1NSAxLjUwOC43MDQgMi42NDQgMS43OCAzLjQwOCAzLjIyNiAxLjY0OC0yLjg1NCA1LjA0NC00LjI4IDEwLjE5MS00LjI4IDMuNjk4IDAgNi40NTIuOTI0IDguMjYxIDIuNzczIDEuODA5IDEuODUgMi43MTQgNC45MDUgMi43MTQgOS4xNjZINDYxWiIvPjwvZz48ZGVmcz48Y2xpcFBhdGggaWQ9ImEiPjxwYXRoIGZpbGw9IiNmZmYiIHRyYW5zZm9ybT0idHJhbnNsYXRlKC4yNSAuMDQ4KSIgZD0iTTAgMGg0NjAuNzV2NTUuMDY0SDB6Ii8+PC9jbGlwUGF0aD48L2RlZnM+PC9zdmc+');
                            background-size: auto 20px;
                            background-repeat: no-repeat;
                            background-position: 50% 50%;
                            font-size: 0px;

                        }
                    </style>

                    <!-- <div class="style-00" data-spm-anchor-id="0.12336158.0.i17.65c565aa7Z6egm"> -->
                    <!-- <header class="style-01"> -->
                    <div class="sidebar__logo ">
                        <a href="//www.alibaba.com/" class="style-02" data-val="Alibaba.com">Alibaba.com</a>
                    </div>
                    <!-- </header> -->

                    <!-- </div> -->
                    <!-- <a class="sidebar__logo" href="index.php">
                        <img class="sidebar__logo-icon" src="../uploads/logo/alrashid-logo.png" alt="#" width="44" />
                        <div class="sidebar__logo-text" style="font-size: 18px;">Al-Rashid</div>
                    </a> -->
                </div>
            </div>
            <div class="sidebar__content" data-simplebar="data-simplebar">
                <nav class="sidebar__nav">
                    <ul class="sidebar__menu">
                        <li class="sidebar__menu-item"><a class="sidebar__link active" href="index.php"
                                aria-expanded="true"><span class="sidebar__link-icon">
                                    <svg class="icon-icon-dashboard">
                                        <use xlink:href="#icon-dashboard"></use>
                                    </svg></span><span class="sidebar__link-text">Dashboard</span></a>
                        </li>

                        <li class="sidebar__menu-item"><a class="sidebar__link" href="products.html"
                                data-toggle="collapse" data-target="#Site-settings" aria-expanded="false"><span
                                    class="sidebar__link-icon">
                                    <svg class="icon-icon-settings">
                                        <use xlink:href="#icon-settings"></use>
                                    </svg></span><span class="sidebar__link-text">Site Settings</span><span
                                    class="sidebar__link-arrow">
                                    <svg class="icon-icon-keyboard-down">
                                        <use xlink:href="#icon-keyboard-down"></use>
                                    </svg></span></a>
                            <div class="collapse" id="Site-settings">
                                <ul class="sidebar__collapse-menu">
                                    <li class="sidebar__menu-item"><a class="sidebar__link"
                                            href="site-settings.php"><span class="sidebar__link-signal"></span><span
                                                class="sidebar__link-text">Site Info</span></a>
                                    </li>
                                    <li class="sidebar__menu-item"><a class="sidebar__link"
                                            href="account-settings.php"><span class="sidebar__link-signal"></span><span
                                                class="sidebar__link-text">Account Info</span></a>
                                    </li>
                                </ul>
                            </div>
                        </li>

                        <li class="sidebar__menu-item"><a class="sidebar__link" href="create-order.php"
                                data-toggle="collapse" data-target="#Create-order" aria-expanded="false"><span
                                    class="sidebar__link-icon">
                                    <svg class="icon-icon-status">
                                        <use xlink:href="#icon-status"></use>
                                    </svg></span><span class="sidebar__link-text">Create Orders</span><span
                                    class="sidebar__link-arrow">
                                    <svg class="icon-icon-keyboard-down">
                                        <use xlink:href="#icon-keyboard-down"></use>
                                    </svg></span></a>
                            <div class="collapse" id="Create-order">
                                <ul class="sidebar__collapse-menu">
                                    <li class="sidebar__menu-item"><a class="sidebar__link" href="add-order.php"><span
                                                class="sidebar__link-signal"></span><span class="sidebar__link-text">Add
                                                Order</span></a>
                                    </li>
                                    <li class="sidebar__menu-item"><a class="sidebar__link"
                                            href="order_products.php"><span class="sidebar__link-signal"></span><span
                                                class="sidebar__link-text">View Order</span></a>
                                    </li>

                                </ul>
                            </div>
                        </li>

                        <li class="sidebar__menu-item"><a class="sidebar__link" href="create-order.php"
                                data-toggle="collapse" data-target="#Checkout" aria-expanded="false"><span
                                    class="sidebar__link-icon">
                                    <svg class="icon-icon-cart">
                                        <use xlink:href="#icon-cart"></use>
                                    </svg></span><span class="sidebar__link-text">Checkout</span><span
                                    class="sidebar__link-arrow">
                                    <svg class="icon-icon-keyboard-down">
                                        <use xlink:href="#icon-keyboard-down"></use>
                                    </svg></span></a>
                            <div class="collapse" id="Checkout">
                                <ul class="sidebar__collapse-menu">
                                    <li class="sidebar__menu-item"><a class="sidebar__link"
                                            href="checkout-details.php"><span class="sidebar__link-signal"></span><span
                                                class="sidebar__link-text">Add Details</span></a>
                                    </li>
                                    <li class="sidebar__menu-item"><a class="sidebar__link"
                                            href="all-checkout.php"><span class="sidebar__link-signal"></span><span
                                                class="sidebar__link-text">View Details</span></a>
                                    </li>

                                </ul>
                            </div>
                        </li>

                        <li class="sidebar__menu-item"><a class="sidebar__link" href="settings.php"
                                aria-expanded="false"><span class="sidebar__link-icon">
                                    <svg class="icon-icon-password">
                                        <use xlink:href="#icon-password"></use>
                                    </svg></span><span class="sidebar__link-text">Change Password</span></a>
                        </li>

                        <li class="sidebar__menu-item"><a class="sidebar__link" href="../scripts/logout.php"
                                aria-expanded="false"><span class="sidebar__link-icon">
                                    <svg class="icon-icon-logout">
                                        <use xlink:href="#icon-logout"></use>
                                    </svg></span><span class="sidebar__link-text">Logout</span></a>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
    </aside>