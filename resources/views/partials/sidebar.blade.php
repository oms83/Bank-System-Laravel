
        <aside class="left-sidebar d-print-none" data-sidebarbg="skin6">
            <!-- Sidebar scroll-->
            <div class="scroll-sidebar">
                <!-- Sidebar navigation-->
                <nav class="sidebar-nav">
                    <ul id="sidebarnav">

                        <li class="p-15 m-t-10"></li>
                        <!-- User Profile-->
                        <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link" href="{{route('dashboard')}}" aria-expanded="false"><i class="mdi mdi-view-dashboard"></i><span class="hide-menu">Dashboard</span></a></li>
                        <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link" href="{{route('profile')}}" aria-expanded="false"><i class="mdi mdi-account-settings"></i><span class="hide-menu">Profile</span></a></li>
                        <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link" href="{{route('accounts')}}" aria-expanded="false"><i class="mdi mdi-bank"></i><span class="hide-menu">Accounts</span></a></li>
                        <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link" href="{{route('cards')}}" aria-expanded="false"><i class="mdi mdi-credit-card-multiple"></i><span class="hide-menu">Cards</span></a></li>
                        <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link" href="{{route('all_transactions')}}" aria-expanded="false"><i class="mdi mdi-swap-horizontal"></i><span class="hide-menu">Transactions</span></a></li>
                        <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link" href="{{route('settings')}}" aria-expanded="false"><i class="mdi mdi-settings"></i><span class="hide-menu">Settings</span></a></li>
                        @if(auth()->user()->hasRole('System-Admin'))
                            <hr style="padding: 0; margin: 0; border-color: darkgrey; "/>
                        @endif
                        @can('list-users')
                            <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link" href="{{ route('users') }}" aria-expanded="false"><i class="mdi mdi-account"></i><span class="hide-menu">Users</span></a></li>
                        @endcan

                        @can('list-currencies')
                            <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link" href="{{ route('currencies') }}" aria-expanded="false"><i class="mdi mdi-currency-usd"></i><span class="hide-menu">Currencies</span></a></li>
                        @endcan

                        @can('list-card-types')
                            <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link" href="{{ route('card_types') }}" aria-expanded="false"><i class="mdi mdi-cards"></i><span class="hide-menu">Card Types</span></a></li>
                        @endcan

                        @can('list-banks')
                            <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link" href="{{ route('banks') }}" aria-expanded="false"><i class="mdi mdi-bank"></i><span class="hide-menu">Banks</span></a></li>
                        @endcan
                    </ul>

                </nav>
                <!-- End Sidebar navigation -->
            </div>
            <!-- End Sidebar scroll-->
        </aside>
