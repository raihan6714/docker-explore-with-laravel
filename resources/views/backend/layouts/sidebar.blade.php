<div
    class="vertical-menu rtl:right-0 fixed ltr:left-0 bottom-0 top-16 h-screen border-r bg-slate-50 border-gray-50 print:hidden dark:bg-zinc-800 dark:border-neutral-700 z-10">

    <div data-simplebar class="h-full">
        <!--- Sidemen -->
        <div id="sidebar-menu">
            <!-- Left Menu Start -->
            <ul class="metismenu" id="side-menu">
                <li class="menu-heading px-4 py-3.5 text-xs font-medium text-gray-500 cursor-default" data-key="t-menu">
                    {{ __('messages.menu') }}
                </li>

                <li>
                    <a href="{{ route('dashboard') }}"
                       class="pl-6 pr-4 py-3 block text-sm font-medium text-gray-700 transition-all duration-150 ease-linear hover:text-violet-500 dark:text-gray-300 dark:active:text-white dark:hover:text-white">
                        <i data-feather="home"></i>
                        <span data-key="t-dashboard"> {{ __('messages.dashboard') }}</span>
                    </a>
                </li>

                <li>
                    <a href="javascript: void(0);" aria-expanded="false"
                       class="nav-menu pl-6 pr-4 py-3 block text-sm font-medium text-gray-700 transition-all duration-150 ease-linear hover:text-violet-500 dark:text-gray-300 dark:active:text-white dark:hover:text-white">
                        <i data-feather="figma"></i>
                        <span data-key="t-add">{{ __('messages.add') }}</span>
                    </a>
                    <ul class="ml-5">
                        <li>
                            <a href="{{ route('service.create') }}"
                               class="pl-6 pr-4 py-3 block text-sm font-medium text-gray-700 transition-all duration-150 ease-linear hover:text-violet-500 dark:text-gray-300 dark:active:text-white dark:hover:text-white">
                                <i data-feather="info"></i>
                                <span data-key="t-charts"> Service</span>
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('appointments.create') }}"
                               class="pl-6 pr-4 py-3 block text-sm font-medium text-gray-700 transition-all duration-150 ease-linear hover:text-violet-500 dark:text-gray-300 dark:active:text-white dark:hover:text-white">
                                <i data-feather="camera"></i>
                                <span data-key="t-camera"> Appointment</span>
                            </a>
                        </li>
{{--                        <li>--}}
{{--                            <a href="{{ route('appointment.create') }}"--}}
{{--                               class="pl-6 pr-4 py-3 block text-sm font-medium text-gray-700 transition-all duration-150 ease-linear hover:text-violet-500 dark:text-gray-300 dark:active:text-white dark:hover:text-white">--}}
{{--                                <i data-feather="cpu"></i>--}}
{{--                                <span data-key="t-Achievement">About Us</span>--}}
{{--                            </a>--}}
{{--                        </li>--}}
                        <li>
                            <a href="{{ route('patient.create') }}"
                               class="pl-6 pr-4 py-3 block text-sm font-medium text-gray-700 transition-all duration-150 ease-linear hover:text-violet-500 dark:text-gray-300 dark:active:text-white dark:hover:text-white">
                                <i data-feather="map"></i>
                                <span data-key="t-notice"> Patient</span>
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('client.create') }}"
                               class="pl-6 pr-4 py-3 block text-sm font-medium text-gray-700 transition-all duration-150 ease-linear hover:text-violet-500 dark:text-gray-300 dark:active:text-white dark:hover:text-white">
                                <i data-feather="instagram"></i>
                                <span data-key="t-level"> Client</span>
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('invoice.create') }}"
                               class="pl-6 pr-4 py-3 block text-sm font-medium text-gray-700 transition-all duration-150 ease-linear hover:text-violet-500 dark:text-gray-300 dark:active:text-white dark:hover:text-white">
                                <i data-feather="file"></i>
                                <span data-key="t-level"> Invoice</span>
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('prescription.create') }}"
                               class="pl-6 pr-4 py-3 block text-sm font-medium text-gray-700 transition-all duration-150 ease-linear hover:text-violet-500 dark:text-gray-300 dark:active:text-white dark:hover:text-white">
                                <i data-feather="inbox"></i>
                                <span data-key="t-level"> Prescription</span>
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('inventory-items.create') }}"
                               class="pl-6 pr-4 py-3 block text-sm font-medium text-gray-700 transition-all duration-150 ease-linear hover:text-violet-500 dark:text-gray-300 dark:active:text-white dark:hover:text-white">
                                <i data-feather="phone"></i>
                                <span data-key="t-level"> Inventory Items</span>
                            </a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="javascript: void(0);" aria-expanded="false"
                       class="nav-menu pl-6 pr-4 py-3 block text-sm font-medium text-gray-700 transition-all duration-150 ease-linear hover:text-violet-500 dark:text-gray-300 dark:active:text-white dark:hover:text-white">
                        <i data-feather="edit"></i>
                        <span data-key="t-edit">{{ __('messages.edit') }}</span>
                    </a>
                    <ul class="ml-5">
                        <li>
                            <a href="{{ route('service.index') }}"
                               class="pl-6 pr-4 py-3 block text-sm font-medium text-gray-700 transition-all duration-150 ease-linear hover:text-violet-500 dark:text-gray-300 dark:active:text-white dark:hover:text-white">
                                <i data-feather="info"></i>
                                <span data-key="t-charts"> {{ __('messages.basic_information') }}</span>
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('appointments.index') }}"
                               class="pl-6 pr-4 py-3 block text-sm font-medium text-gray-700 transition-all duration-150 ease-linear hover:text-violet-500 dark:text-gray-300 dark:active:text-white dark:hover:text-white">
                                <i data-feather="camera"></i>
                                <span data-key="t-camera"> Home</span>
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('appointments.index') }}"
                               class="pl-6 pr-4 py-3 block text-sm font-medium text-gray-700 transition-all duration-150 ease-linear hover:text-violet-500 dark:text-gray-300 dark:active:text-white dark:hover:text-white">
                                <i data-feather="cpu"></i>
                                <span data-key="t-Achievement"> About Us</span>
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('patient.index') }}"
                               class="pl-6 pr-4 py-3 block text-sm font-medium text-gray-700 transition-all duration-150 ease-linear hover:text-violet-500 dark:text-gray-300 dark:active:text-white dark:hover:text-white">
                                <i data-feather="map"></i>
                                <span data-key="t-notice"> Destination</span>
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('client.index') }}"
                               class="pl-6 pr-4 py-3 block text-sm font-medium text-gray-700 transition-all duration-150 ease-linear hover:text-violet-500 dark:text-gray-300 dark:active:text-white dark:hover:text-white">
                                <i data-feather="instagram"></i>
                                <span data-key="t-level"> Tour</span>
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('invoice.index') }}"
                               class="pl-6 pr-4 py-3 block text-sm font-medium text-gray-700 transition-all duration-150 ease-linear hover:text-violet-500 dark:text-gray-300 dark:active:text-white dark:hover:text-white">
                                <i data-feather="file"></i>
                                <span data-key="t-level"> invoice</span>
                            </a>
                        </li>
{{--                        <li>--}}
{{--                            <a href="{{ route('blogs.index') }}"--}}
{{--                               class="pl-6 pr-4 py-3 block text-sm font-medium text-gray-700 transition-all duration-150 ease-linear hover:text-violet-500 dark:text-gray-300 dark:active:text-white dark:hover:text-white">--}}
{{--                                <i data-feather="inbox"></i>--}}
{{--                                <span data-key="t-level"> Blog</span>--}}
{{--                            </a>--}}
{{--                        </li>--}}
                        <li>
                            <a href="{{ route('inventory-items.index') }}"
                               class="pl-6 pr-4 py-3 block text-sm font-medium text-gray-700 transition-all duration-150 ease-linear hover:text-violet-500 dark:text-gray-300 dark:active:text-white dark:hover:text-white">
                                <i data-feather="phone"></i>
                                <span data-key="t-level"> Contact Us</span>
                            </a>
                        </li>
                    </ul>
                </li>


            </ul>
        </div>
        <!-- Sidebar -->
    </div>
</div>
