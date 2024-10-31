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
                    <a href=""
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
                            <a href=""
                               class="pl-6 pr-4 py-3 block text-sm font-medium text-gray-700 transition-all duration-150 ease-linear hover:text-violet-500 dark:text-gray-300 dark:active:text-white dark:hover:text-white">
                                <i data-feather="info"></i>
                                <span data-key="t-charts"> {{ __('messages.basic_information') }}</span>
                            </a>
                        </li>
                        <li>
                            <a href=""
                               class="pl-6 pr-4 py-3 block text-sm font-medium text-gray-700 transition-all duration-150 ease-linear hover:text-violet-500 dark:text-gray-300 dark:active:text-white dark:hover:text-white">
                                <i data-feather="camera"></i>
                                <span data-key="t-camera"> {{ __('messages.slider') }}</span>
                            </a>
                        </li>
                        <li>
                            <a href="javascript: void(0);" aria-expanded="false"
                               class="nav-menu pl-6 pr-4 py-3 block text-sm font-medium text-gray-700 transition-all duration-150 ease-linear hover:text-violet-500 dark:text-gray-300 dark:active:text-white dark:hover:text-white">
                                <i data-feather="grid"></i>
                                <span data-key="t-apps"> {{ __('messages.about_us') }}</span>
                            </a>
                            <ul>
                                <li>
                                    <a href=""
                                       class="pl-14 pr-4 py-2 block text-[13.5px] font-medium text-gray-700 transition-all duration-150 ease-linear hover:text-violet-500 dark:text-gray-300 dark:active:text-white dark:hover:text-white"> {{ __('messages.glance') }}</a>
                                </li>
                                <li>
                                    <a href=""
                                       class="pl-14 pr-4 py-2 block text-[13.5px] font-medium text-gray-700 transition-all duration-150 ease-linear hover:text-violet-500 dark:text-gray-300 dark:active:text-white dark:hover:text-white"> {{ __('messages.history') }}</a>
                                </li>
                                <li>
                                    <a href=""
                                       class="pl-14 pr-4 py-2 block text-[13.5px] font-medium text-gray-700 transition-all duration-150 ease-linear hover:text-violet-500 dark:text-gray-300 dark:active:text-white dark:hover:text-white">{{ __('messages.study') }}</a>
                                </li>
                                <li>
                                    <a href=""
                                       class="pl-14 pr-4 py-2 block text-[13.5px] font-medium text-gray-700 transition-all duration-150 ease-linear hover:text-violet-500 dark:text-gray-300 dark:active:text-white dark:hover:text-white">{{ __('messages.mission_vision') }}</a>
                                </li>
                                <li>
                                    <a href=""
                                       class="pl-14 pr-4 py-2 block text-[13.5px] font-medium text-gray-700 transition-all duration-150 ease-linear hover:text-violet-500 dark:text-gray-300 dark:active:text-white dark:hover:text-white">{{ __('messages.infrastructure') }}</a>
                                </li>
                                <li>
                                    <a href=""
                                       class="pl-14 pr-4 py-2 block text-[13.5px] font-medium text-gray-700 transition-all duration-150 ease-linear hover:text-violet-500 dark:text-gray-300 dark:active:text-white dark:hover:text-white">{{ __('messages.news_events') }}</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href=""
                               class="pl-6 pr-4 py-3 block text-sm font-medium text-gray-700 transition-all duration-150 ease-linear hover:text-violet-500 dark:text-gray-300 dark:active:text-white dark:hover:text-white">
                                <i data-feather="cpu"></i>
                                <span data-key="t-Achievement"> {{ __('messages.achievement') }}</span>
                            </a>
                        </li>
                        <li>
                            <a href="javascript: void(0);" aria-expanded="false"
                               class="nav-menu pl-6 pr-4 py-3 block text-sm font-medium text-gray-700 transition-all duration-150 ease-linear hover:text-violet-500 dark:text-gray-300 dark:active:text-white dark:hover:text-white">
                                <i data-feather="users"></i>
                                <span data-key="t-auth"> {{ __('messages.administration') }}</span>
                            </a>
                            <ul>
                                <li>
                                    <a href=""
                                       class="pl-14 pr-4 py-2 block text-[13.5px] font-medium text-gray-700 transition-all duration-150 ease-linear hover:text-violet-500 dark:text-gray-300 dark:active:text-white dark:hover:text-white"> {{ __('messages.chairman') }}</a>
                                </li>
                                <li>
                                    <a href=""
                                       class="pl-14 pr-4 py-2 block text-[13.5px] font-medium text-gray-700 transition-all duration-150 ease-linear hover:text-violet-500 dark:text-gray-300 dark:active:text-white dark:hover:text-white"> {{ __('messages.head_sir') }}</a>
                                </li>
                                <li>
                                    <a href=""
                                       class="pl-14 pr-4 py-2 block text-[13.5px] font-medium text-gray-700 transition-all duration-150 ease-linear hover:text-violet-500 dark:text-gray-300 dark:active:text-white dark:hover:text-white"> {{ __('messages.teachers') }}</a>
                                </li>
                                <li>
                                    <a href=""
                                       class="pl-14 pr-4 py-2 block text-[13.5px] font-medium text-gray-700 transition-all duration-150 ease-linear hover:text-violet-500 dark:text-gray-300 dark:active:text-white dark:hover:text-white"> {{ __('messages.officers') }}</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="javascript: void(0);" aria-expanded="false"
                               class="nav-menu pl-6 pr-4 py-3 block text-sm font-medium text-gray-700 transition-all duration-150 ease-linear hover:text-violet-500 dark:text-gray-300 dark:active:text-white dark:hover:text-white">
                                <i data-feather="briefcase"></i><span data-key="t-pages"> {{ __('messages.academic') }}</span>
                            </a>
                            <ul>
                                <li>
                                    <a href=""
                                       class="pl-14 pr-4 py-2 block text-[13.5px] font-medium text-gray-700 transition-all duration-150 ease-linear hover:text-violet-500 dark:text-gray-300 dark:active:text-white dark:hover:text-white"> {{ __('messages.academic_calendar') }}</a>
                                </li>
                                <li>
                                    <a href=""
                                       class="pl-14 pr-4 py-2 block text-[13.5px] font-medium text-gray-700 transition-all duration-150 ease-linear hover:text-violet-500 dark:text-gray-300 dark:active:text-white dark:hover:text-white"> {{ __('messages.class_routine') }}</a>
                                </li>
                                <li>
                                    <a href=""
                                       class="pl-14 pr-4 py-2 block text-[13.5px] font-medium text-gray-700 transition-all duration-150 ease-linear hover:text-violet-500 dark:text-gray-300 dark:active:text-white dark:hover:text-white"> {{ __('messages.exam_routine') }}</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href=""
                               class="pl-6 pr-4 py-3 block text-sm font-medium text-gray-700 transition-all duration-150 ease-linear hover:text-violet-500 dark:text-gray-300 dark:active:text-white dark:hover:text-white">
                                <i data-feather="map"></i>
                                <span data-key="t-notice"> {{ __('messages.notice') }}</span>
                            </a>
                        </li>
                        <li>
                            <a href="javascript: void(0);" aria-expanded="false"
                               class="nav-menu pl-6 pr-4 py-3 block text-sm font-medium text-gray-700 transition-all duration-150 ease-linear hover:text-violet-500 dark:text-gray-300 dark:active:text-white dark:hover:text-white">
                                <i data-feather="box"></i>
                                <span data-key="t-compo"> {{ __('messages.admission') }}</span>
                            </a>
                            <ul>
                                <li>
                                    <a href=""
                                       class="pl-14 pr-4 py-2 block text-[13.5px] font-medium text-gray-700 transition-all duration-150 ease-linear hover:text-violet-500 dark:text-gray-300 dark:active:text-white dark:hover:text-white"> {{ __('messages.admission_circular') }}</a>
                                </li>
                                <li>
                                    <a href=""
                                       class="pl-14 pr-4 py-2 block text-[13.5px] font-medium text-gray-700 transition-all duration-150 ease-linear hover:text-violet-500 dark:text-gray-300 dark:active:text-white dark:hover:text-white"> {{ __('messages.admission_result') }}</a>
                                </li>

                            </ul>
                        </li>
                        <li>
                            <a href=""
                               class="pl-6 pr-4 py-3 block text-sm font-medium text-gray-700 transition-all duration-150 ease-linear hover:text-violet-500 dark:text-gray-300 dark:active:text-white dark:hover:text-white">
                                <i data-feather="inbox"></i>
                                <span data-key="t-level"> {{ __('messages.gallery') }}</span>
                            </a>
                        </li>
                        <li>
                            <a href=""
                               class="pl-6 pr-4 py-3 block text-sm font-medium text-gray-700 transition-all duration-150 ease-linear hover:text-violet-500 dark:text-gray-300 dark:active:text-white dark:hover:text-white">
                                <i data-feather="inbox"></i>
                                <span data-key="t-level"> {{ __('messages.contacts') }}</span>
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
                            <a href=""
                               class="pl-6 pr-4 py-3 block text-sm font-medium text-gray-700 transition-all duration-150 ease-linear hover:text-violet-500 dark:text-gray-300 dark:active:text-white dark:hover:text-white">
                                <i data-feather="info"></i>
                                <span data-key="t-charts"> {{ __('messages.basic_information') }}</span>
                            </a>
                        </li>
                        <li>
                            <a href=""
                               class="pl-6 pr-4 py-3 block text-sm font-medium text-gray-700 transition-all duration-150 ease-linear hover:text-violet-500 dark:text-gray-300 dark:active:text-white dark:hover:text-white">
                                <i data-feather="camera"></i>
                                <span data-key="t-camera"> {{ __('messages.slider') }}</span>
                            </a>
                        </li>
                        <li>
                            <a href="javascript: void(0);" aria-expanded="false"
                               class="nav-menu pl-6 pr-4 py-3 block text-sm font-medium text-gray-700 transition-all duration-150 ease-linear hover:text-violet-500 dark:text-gray-300 dark:active:text-white dark:hover:text-white">
                                <i data-feather="grid"></i>
                                <span data-key="t-apps"> {{ __('messages.about_us') }}</span>
                            </a>
                            <ul>
                                <li>
                                    <a href=""
                                       class="pl-14 pr-4 py-2 block text-[13.5px] font-medium text-gray-700 transition-all duration-150 ease-linear hover:text-violet-500 dark:text-gray-300 dark:active:text-white dark:hover:text-white">{{ __('messages.glance') }}</a>
                                </li>
                                <li>
                                    <a href=""
                                       class="pl-14 pr-4 py-2 block text-[13.5px] font-medium text-gray-700 transition-all duration-150 ease-linear hover:text-violet-500 dark:text-gray-300 dark:active:text-white dark:hover:text-white">{{ __('messages.history') }}</a>
                                </li>
                                <li>
                                    <a href=""
                                       class="pl-14 pr-4 py-2 block text-[13.5px] font-medium text-gray-700 transition-all duration-150 ease-linear hover:text-violet-500 dark:text-gray-300 dark:active:text-white dark:hover:text-white">{{ __('messages.study') }}</a>
                                </li>
                                <li>
                                    <a href=""
                                       class="pl-14 pr-4 py-2 block text-[13.5px] font-medium text-gray-700 transition-all duration-150 ease-linear hover:text-violet-500 dark:text-gray-300 dark:active:text-white dark:hover:text-white">{{ __('messages.mission_vision') }}</a>
                                </li>
                                <li>
                                    <a href=""
                                       class="pl-14 pr-4 py-2 block text-[13.5px] font-medium text-gray-700 transition-all duration-150 ease-linear hover:text-violet-500 dark:text-gray-300 dark:active:text-white dark:hover:text-white">{{ __('messages.infrastructure') }}</a>
                                </li>
                                <li>
                                    <a href=""
                                       class="pl-14 pr-4 py-2 block text-[13.5px] font-medium text-gray-700 transition-all duration-150 ease-linear hover:text-violet-500 dark:text-gray-300 dark:active:text-white dark:hover:text-white">{{ __('messages.news_events') }}</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href=""
                               class="pl-6 pr-4 py-3 block text-sm font-medium text-gray-700 transition-all duration-150 ease-linear hover:text-violet-500 dark:text-gray-300 dark:active:text-white dark:hover:text-white">
                                <i data-feather="cpu"></i>
                                <span data-key="t-Achievement"> {{ __('messages.achievement') }}</span>
                            </a>
                        </li>
                        <li>
                            <a href="javascript: void(0);" aria-expanded="false"
                               class="nav-menu pl-6 pr-4 py-3 block text-sm font-medium text-gray-700 transition-all duration-150 ease-linear hover:text-violet-500 dark:text-gray-300 dark:active:text-white dark:hover:text-white">
                                <i data-feather="users"></i>
                                <span data-key="t-auth"> {{ __('messages.administration') }}</span>
                            </a>
                            <ul>
                                <li>
                                    <a href=""
                                       class="pl-14 pr-4 py-2 block text-[13.5px] font-medium text-gray-700 transition-all duration-150 ease-linear hover:text-violet-500 dark:text-gray-300 dark:active:text-white dark:hover:text-white">{{ __('messages.chairman') }}</a>
                                </li>
                                <li>
                                    <a href=""
                                       class="pl-14 pr-4 py-2 block text-[13.5px] font-medium text-gray-700 transition-all duration-150 ease-linear hover:text-violet-500 dark:text-gray-300 dark:active:text-white dark:hover:text-white">{{ __('messages.head_sir') }}</a>
                                </li>
                                <li>
                                    <a href=""
                                       class="pl-14 pr-4 py-2 block text-[13.5px] font-medium text-gray-700 transition-all duration-150 ease-linear hover:text-violet-500 dark:text-gray-300 dark:active:text-white dark:hover:text-white">{{ __('messages.teachers') }}</a>
                                </li>
                                <li>
                                    <a href=""
                                       class="pl-14 pr-4 py-2 block text-[13.5px] font-medium text-gray-700 transition-all duration-150 ease-linear hover:text-violet-500 dark:text-gray-300 dark:active:text-white dark:hover:text-white">{{ __('messages.officers') }}</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="javascript: void(0);" aria-expanded="false"
                               class="nav-menu pl-6 pr-4 py-3 block text-sm font-medium text-gray-700 transition-all duration-150 ease-linear hover:text-violet-500 dark:text-gray-300 dark:active:text-white dark:hover:text-white">
                                <i data-feather="briefcase"></i><span data-key="t-pages"> {{ __('messages.academic') }}</span>
                            </a>
                            <ul>
                                <li>
                                    <a href=""
                                       class="pl-14 pr-4 py-2 block text-[13.5px] font-medium text-gray-700 transition-all duration-150 ease-linear hover:text-violet-500 dark:text-gray-300 dark:active:text-white dark:hover:text-white">{{ __('messages.academic_calendar') }}</a>
                                </li>
                                <li>
                                    <a href=""
                                       class="pl-14 pr-4 py-2 block text-[13.5px] font-medium text-gray-700 transition-all duration-150 ease-linear hover:text-violet-500 dark:text-gray-300 dark:active:text-white dark:hover:text-white">{{ __('messages.class_routine') }}</a>
                                </li>
                                <li>
                                    <a href=""
                                       class="pl-14 pr-4 py-2 block text-[13.5px] font-medium text-gray-700 transition-all duration-150 ease-linear hover:text-violet-500 dark:text-gray-300 dark:active:text-white dark:hover:text-white">{{ __('messages.exam_routine') }}</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href=""
                               class="pl-6 pr-4 py-3 block text-sm font-medium text-gray-700 transition-all duration-150 ease-linear hover:text-violet-500 dark:text-gray-300 dark:active:text-white dark:hover:text-white">
                                <i data-feather="map"></i>
                                <span data-key="t-notice"> {{ __('messages.notice') }}</span>
                            </a>
                        </li>
                        <li>
                            <a href="javascript: void(0);" aria-expanded="false"
                               class="nav-menu pl-6 pr-4 py-3 block text-sm font-medium text-gray-700 transition-all duration-150 ease-linear hover:text-violet-500 dark:text-gray-300 dark:active:text-white dark:hover:text-white">
                                <i data-feather="box"></i>
                                <span data-key="t-compo">{{ __('messages.admission') }}</span>
                            </a>
                            <ul>
                                <li>
                                    <a href=""
                                       class="pl-14 pr-4 py-2 block text-[13.5px] font-medium text-gray-700 transition-all duration-150 ease-linear hover:text-violet-500 dark:text-gray-300 dark:active:text-white dark:hover:text-white">{{ __('messages.admission_circular') }}</a>
                                </li>
                                <li>
                                    <a href=""
                                       class="pl-14 pr-4 py-2 block text-[13.5px] font-medium text-gray-700 transition-all duration-150 ease-linear hover:text-violet-500 dark:text-gray-300 dark:active:text-white dark:hover:text-white">{{ __('messages.admission_result') }}</a>
                                </li>

                            </ul>
                        </li>
                        <li>
                            <a href=""
                               class="pl-6 pr-4 py-3 block text-sm font-medium text-gray-700 transition-all duration-150 ease-linear hover:text-violet-500 dark:text-gray-300 dark:active:text-white dark:hover:text-white">
                                <i data-feather="instagram"></i>
                                <span data-key="t-level"> {{ __('messages.gallery') }}</span>
                            </a>
                        </li>
                        <li>
                            <a href=""
                               class="pl-6 pr-4 py-3 block text-sm font-medium text-gray-700 transition-all duration-150 ease-linear hover:text-violet-500 dark:text-gray-300 dark:active:text-white dark:hover:text-white">
                                <i data-feather="inbox"></i>
                                <span data-key="t-level"> {{ __('messages.contacts') }}</span>
                            </a>
                        </li>
                    </ul>
                </li>



            </ul>
        </div>
        <!-- Sidebar -->
    </div>
</div>
