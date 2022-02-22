<!--begin::Header-->
<div id="kt_header" class="header header-fixed">
    <!--begin::Container-->
    <div class="container d-flex align-items-stretch justify-content-between">
        <!--begin::Left-->
        <div class="d-flex align-items-stretch mr-3">
            <!--begin::Header Logo-->
            <div class="header-logo">
                <a n:href="Homepage:default">
                    <img alt="Logo" src="{{ asset('/assets/img/logo-white.png/') }}" class="logo-default max-h-40px"/>
                    <img alt="Logo" src="{{ asset('/assets/img/logo.png') }}" class="logo-sticky max-h-40px"/>
                </a>
            </div>
            <!--end::Header Logo-->


            <!--begin::Header Menu Wrapper-->
            <div class="header-menu-wrapper header-menu-wrapper-left" id="kt_header_menu_wrapper">
                <!--begin::Header Menu-->
                <div id="kt_header_menu"
                     class="header-menu header-menu-left header-menu-mobile header-menu-layout-default">
                    <!--begin::Header Nav-->
                    <ul class="menu-nav">
                        <li class="{{ request()->segment(1) == 'klient' && request()->segment(2) == '' ? 'menu-item-here menu-item' : 'menu-item' }}" data-menu-toggle="click">
                            <a href="{{ route('client') }}" class="menu-link">
                                <span class="menu-text">Nástenka</span>
                            </a>

                        </li>
                        <li class="menu-item" data-menu-toggle="click">
                            <a href="javascript:;" class="menu-link">
                                <span class="menu-text">Schránka</span>
                            </a>
                        </li>
                        <li class="menu-item" data-menu-toggle="click">
                            <a href="javascript:;" class="menu-link">
                                <span class="menu-text">Oprávnené osoby</span>
                            </a>
                        </li>
                        <li class="{{ request()->segment(2) == 'spolocnosti' ? 'menu-item-here menu-item' : 'menu-item' }}" data-menu-toggle="click">
                            <a href="{{ route('spolocnosti.index') }}" class="menu-link">
                                <span class="menu-text">Spoločnosti</span>
                            </a>
                        </li>
                    </ul>
                    <!--end::Header Nav-->
                </div>
                <!--end::Header Menu-->
            </div>
            <!--end::Header Menu Wrapper-->
        </div>
        <!--end::Left-->
        <!--begin::Topbar-->
        <div class="topbar">
            <!--begin::User-->
            <div class="dropdown">
                <!--begin::Toggle-->
                <div class="topbar-item">
                    <div class="btn btn-icon btn-hover-transparent-white d-flex align-items-center btn-lg px-md-2 w-md-auto" id="kt_quick_user_toggle">
                        <span class="text-white opacity-70 font-weight-bold font-size-base d-none d-md-inline mr-1">Vitajte,</span>
                        <span class="text-white opacity-90 font-weight-bolder font-size-base d-none d-md-inline mr-4">{{ auth()->user()->getFirstName() }}</span>
                        <span class="symbol symbol-35">
                            <span class="symbol-label text-white font-size-h5 font-weight-bold bg-white-o-30">{{ auth()->user()->getFirstLetterFromName() }}</span>
                        </span>
                    </div>
                </div>
                <!--end::Toggle-->
            </div>
            <!--end::User-->
        </div>
        <!--end::Topbar-->
    </div>
    <!--end::Container-->
</div>
<!--end::Header-->
