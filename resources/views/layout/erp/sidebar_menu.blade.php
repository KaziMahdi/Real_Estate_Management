<div class="h-100" data-simplebar>
                <!--- Sidemenu -->
                <div id="sidebar-menu">

                    <ul id="side-menu">

                        <li class="menu-title">Navigation</li>

                        <li>
                            <a href="{{url('/dashboard')}}">
                                
                            <i class="fas fa-desktop"></i>
                                <span> Dashboard </span>
                            </a>
                        </li>

                        <li class="menu-title mt-2">Apps</li>

                        <li>
                            <a href="#sidebarOwner" data-bs-toggle="collapse">
                            <i class="fas fa-user-tie"></i>
                                <span> Owners </span>
                                <span class="menu-arrow"></span>
                            </a>
                            <div class="collapse" id="sidebarOwner">
                                <ul class="nav-second-level">
                                    <li>
                                        <a href="{{url('/owners/create')}}">Create Owner</a>
                                    </li>
                                    <li>
                                        <a href="{{url('/owners')}}">Manage Owner</a>
                                    </li>
                                    
                    
                                </ul>
                            </div>
                        </li>
                        <li>
                            <a href="#sidebarPlan" data-bs-toggle="collapse">
                            <i class="fas fa-boxes"></i>
                                <span> Project Plan </span>
                                <span class="menu-arrow"></span>
                            </a>
                            <div class="collapse" id="sidebarPlan">
                                <ul class="nav-second-level">
                                    <li>
                                        <a href="{{url('/projectplans/create')}}">Create Plan</a>
                                    </li>
                                    <li>
                                        <a href="{{url('/projectplans')}}">Manage Plan</a>
                                    </li>
                                    
                    
                                </ul>
                            </div>
                        </li>

                        <li>
                            <a href="#sidebarEmail" data-bs-toggle="collapse">
                            <i class="fas fa-user-friends"></i>
                                <span> Employees </span>
                                <span class="menu-arrow"></span>
                            </a>
                            <div class="collapse" id="sidebarEmail">
                                <ul class="nav-second-level">
                                    <li>
                                        <a href="{{url('/employees/create')}}">Create Employee</a>
                                    </li>
                                    <li>
                                        <a href="{{url('/employees')}}">Manage Employee</a>
                                    </li>
                                    <li>
                                        <a href="{{url('/designation/create')}}">Create Designation</a>
                                    </li>
                                    <li>
                                        <a href="{{url('/designation')}}">Manage Designation</a>
                                    </li>
                    
                                </ul>
                            </div>
                        </li>

                        <li>
                            <a href="#sidebarTables" data-bs-toggle="collapse">
                            <i class="fas fa-money-check"></i>
                                <span> Payrol </span>
                                <span class="menu-arrow"></span>
                            </a>
                            <div class="collapse" id="sidebarTables">
                                <ul class="nav-second-level">
                                    <li>
                                        <a href="{{route('payrols.create')}}">Create Payrol</a>
                                    </li>
                                    <li>
                                        <a href="{{route('payrols.index')}}">Manage Payrol</a>
                                    </li>
                                </ul>
                            </div>
                        </li>

                        <li>
                            <a href="#sidebarClient" data-bs-toggle="collapse">                            
                            <i class="fas fa-users"></i>
                                <span> Clients </span>
                                <span class="menu-arrow"></span>
                            </a>
                            <div class="collapse" id="sidebarClient">
                                <ul class="nav-second-level">
                                    <li>
                                        <a href="{{url('/clients/create')}}">Create Client</a>
                                    </li>
                                    <li>
                                        <a href="{{url('/clients')}}">Manage Client</a>
                                    </li>
                                    
                    
                                </ul>
                            </div>
                        </li>



                        <!-- <li>
                            <a href="apps-members.html">
                                <i class="fe-users"></i>
                                <span> Members </span>
                            </a>
                        </li> -->

                        <!-- <li class="menu-title mt-2">Custom</li> -->

                        <li>
                            <a href="#sidebarAuth" data-bs-toggle="collapse">
                            <i class="fas fa-home"></i>
                                <span> Projects </span>
                                <span class="menu-arrow"></span>
                            </a>
                            <div class="collapse" id="sidebarAuth">
                                <ul class="nav-second-level">
                                    <li>
                                        <a href="{{url('/projects/create')}}">Create Projects</a>
                                    </li>
                                    <li>
                                        <a href="{{url('/projects')}}">Manage Projects</a>
                                    </li>                                  
                           
                                </ul>
                            </div>
                        </li>

                        <li>
                            <a href="#sidebarHr" data-bs-toggle="collapse">
                            <i class="fas fa-people-arrows"></i>
                                <span> HR </span>
                                <span class="menu-arrow"></span>
                            </a>
                            <div class="collapse" id="sidebarHr">
                                <ul class="nav-second-level">
                                    <li>
                                        <a href="{{url('/departments/create')}}">Create Depertment</a>
                                    </li>
                                    <li>
                                        <a href="{{url('/departments')}}">Manage Depertment</a>
                                    </li>                                  
                           
                                </ul>
                            </div>
                        </li>

                        <li>
                            <a href="#sidebarTask" data-bs-toggle="collapse">
                            <i class="fas fa-list-ul"></i>
                                <span> Task</span>
                                <span class="menu-arrow"></span>
                            </a>
                            <div class="collapse" id="sidebarTask">
                                <ul class="nav-second-level">
                                    <li>
                                        <a href="{{url('/projecttasks/create')}}">Create Task</a>
                                    </li>
                                    <li>
                                        <a href="{{url('/projecttasks')}}">Manage Task</a>
                                    </li>
                                    
                                </ul>
                            </div>
                        </li>

                        <li>
                            <a href="#sidebarExpages" data-bs-toggle="collapse">
                            <i class="fas fa-pencil-ruler"></i>
                                <span> Task Assigne </span>
                                <span class="menu-arrow"></span>
                            </a>
                            <div class="collapse" id="sidebarExpages">
                                <ul class="nav-second-level">
                                    <li>
                                        <a href="{{url('/tasks/create')}}">Create Task</a>
                                    </li>
                                    <li>
                                        <a href="{{url('/tasks')}}">Manage Task</a>
                                    </li>
                                    
                                </ul>
                            </div>
                        </li>

                        <li>
                            <a href="#sidebarUiKit" data-bs-toggle="collapse">
                            <i class="fas fa-flask"></i>
                                <span>Task Progress</span>
                                <span class="menu-arrow"></span>
                            </a>
                            <div class="collapse" id="sidebarUiKit">
                                <ul class="nav-second-level">
                                    <li>
                                        <a href="{{url('/reports/create')}}">Create Progress</a>
                                    </li>
                                    <li>
                                        <a href="{{url('/reports')}}">Manage Progress</a>
                                    </li>
                                    
                                </ul>
                            </div>
                        </li>

                        <li>
                            <a href="#sidebarLayouts" data-bs-toggle="collapse">
                            <i class="fas fa-tachometer-alt"></i>
                                <span> Attendance </span>
                                <span class="menu-arrow"></span>
                            </a>
                            <div class="collapse" id="sidebarLayouts">
                                <ul class="nav-second-level">
                                    <li>
                                        <a href="{{url('/timesheets/create')}}">Create Attendance</a>
                                    </li>
                                    <li>
                                        <a href="{{url('/timesheets')}}">Manage Attendance</a>
                                    </li>
                                </ul>
                            </div>
                        </li>

                        <li>
                            <a href="#sidebarRequisitions" data-bs-toggle="collapse">
                            <i class="far fa-envelope"></i>
                                <span> Requisition </span>
                                <span class="menu-arrow"></span>
                            </a>
                            <div class="collapse" id="sidebarRequisitions">
                                <ul class="nav-second-level">
                                    <li>
                                        <a href="{{url('/requisitions/create')}}">Create Requisition</a>
                                    </li>
                                    <li>
                                        <a href="{{url('/requisitions')}}">Manage Requisition</a>
                                    </li>
                                </ul>
                            </div>
                        </li>

                        <li class="menu-title mt-2">Components</li>                        

                        <li>
                            <a href="#sidebarMaterials" data-bs-toggle="collapse">
                            <i class="fas fa-people-carry"></i>
                                <span> Materials </span>
                                <span class="menu-arrow"></span>
                            </a>
                            <div class="collapse" id="sidebarMaterials">
                                <ul class="nav-second-level">
                                    <li>
                                        <a href="{{url('/materials/create')}}">Create Materials</a>
                                    </li>
                                    <li>
                                        <a href="{{url('/materials')}}">Manage Materials</a>
                                    </li>   
                                    <li>
                                        <a href="{{url('/categorys/create')}}">Create Categoryes</a>
                                    </li>
                                    <li>
                                        <a href="{{url('/categorys')}}">Manage Categoryes</a>
                                    </li>   
                                    <li>
                                        <a href="{{url('/uoms/create')}}">Create Uom</a>
                                    </li>
                                    <li>
                                        <a href="{{url('/uoms')}}">Manage Uom</a>
                                    </li>   
                                </ul>
                            </div>
                        </li>


                        <li>
                            <a href="#sidebarIcons" data-bs-toggle="collapse">
                            <i class="fab fa-cc-visa"></i>
                                <span>Expenses</span>
                                <span class="menu-arrow"></span>
                            </a>
                            <div class="collapse" id="sidebarIcons">
                                <ul class="nav-second-level">
                                    <li>
                                        <a href="{{route('expenses.create')}}">Create Expenses</a>
                                    </li>
                                    <li>
                                        <a href="{{route('expenses.index')}}">Manage Expenses</a>
                                    </li>                    
                                    
                                    
                                </ul>
                            </div>
                        </li>

                        <li>
                            <a href="#sidebarForms" data-bs-toggle="collapse">
                            <i class="fas fa-money-bill-alt"></i>
                                <span> Purchase </span>
                                <span class="menu-arrow"></span>
                            </a>
                            <div class="collapse" id="sidebarForms">
                                <ul class="nav-second-level">
                                    
                                    <li>
                                        <a href="{{url('/purchases')}}">Manage Purchase</a>
                                    </li>
                                    
                                    <li>
                                        <a href="{{url('/suppliers/create')}}">Create Supplier</a>
                                    </li>
                                    
                                    <li>
                                        <a href="{{url('/suppliers')}}">Manage Supplier</a>
                                    </li>
                                    
                                    
                                </ul>
                            </div>
                        </li>

                        <li>
                            <a href="#sidebarHouse" data-bs-toggle="collapse">
                            <i class="fas fa-igloo"></i>
                                <span>Warehouse</span>
                                <span class="menu-arrow"></span>
                            </a>
                            <div class="collapse" id="sidebarHouse">
                                <ul class="nav-second-level">
                                    <li>
                                        <a href="{{url('/warehouses/create')}}">Create Warehouse</a>
                                    </li>
                                    <li>
                                        <a href="{{url('/warehouses')}}">Manage Warehouse</a>
                                    </li>
                                    
                                    
                                </ul>
                            </div>
                        </li>

                       
                        <li>
                            <a href="#sidebarstocok" data-bs-toggle="collapse">
                            <i class="fas fa-layer-group"></i>
                                <span> Stocks </span>
                                <span class="menu-arrow"></span>
                            </a>
                            <div class="collapse" id="sidebarstocok">
                                <ul class="nav-second-level">
                                    <li>
                                        <a href="{{route('stocks.index')}}">Manage Stocks</a>
                                    </li>   
                                </ul>
                            </div>
                        </li>

                        <!-- <li>
                            <a href="#sidebarTables" data-bs-toggle="collapse">
                            <i class="fas fa-money-check"></i>
                                <span> Assets </span>
                                <span class="menu-arrow"></span>
                            </a>
                            <div class="collapse" id="sidebarTables">
                                <ul class="nav-second-level">
                                    <li>
                                        <a href="tables-basic.html">Create Assets</a>
                                    </li>
                                    <li>
                                        <a href="tables-datatables.html">Manage Assets</a>
                                    </li>
                                </ul>
                            </div>
                        </li>


                        <li>
                            <a href="#sidebarMaps" data-bs-toggle="collapse">
                            <i class="fas fa-server"></i>
                                <span>  Asset Types </span>
                                <span class="menu-arrow"></span>
                            </a>
                            <div class="collapse" id="sidebarMaps">
                                <ul class="nav-second-level">
                                    <li>
                                        <a href="maps-google.html">Create Asset_Types</a>
                                    </li>
                                    <li>
                                        <a href="maps-vector.html">Manage Asset_Types</a>
                                    </li>
                                    
                                </ul>
                            </div>
                        </li>

                        <li>
                            <a href="#sidebarRows" data-bs-toggle="collapse">
                                <i class="fe-map"></i>
                                <span>  Asset Components </span>
                                <span class="menu-arrow"></span>
                            </a>
                            <div class="collapse" id="sidebarRows">
                                <ul class="nav-second-level">
                                    <li>
                                        <a href="maps-google.html">Create Components</a>
                                    </li>
                                    <li>
                                        <a href="maps-vector.html">Manage Components</a>
                                    </li>
                                    
                                </ul>
                            </div>
                        </li> -->

                        

                        <li>
                            <a href="#sidebarCharts" data-bs-toggle="collapse">
                            <i class="fas fa-tools"></i>
                                <span> System </span>
                                <span class="menu-arrow"></span>
                            </a>
                            <div class="collapse" id="sidebarCharts">
                                <ul class="nav-second-level">
                                    <li>
                                        <a href="charts-apex.html">Create User</a>
                                    </li>
                                    <li>
                                        <a href="charts-flot.html">Manage User</a>
                                    </li>
                                    
                                </ul>
                            </div>
                        </li>

                        <li>
                            <a href="{{route('logout')}}">
                            <i class="fas fa-lock"></i>
                                <span> Log-Out </span>
                            </a>
                        </li>

                         <!-- <li>
                            <a href="#sidebarMaps" data-bs-toggle="collapse">
                                <i class="fe-map"></i>
                                <span> Maps </span>
                                <span class="menu-arrow"></span>
                            </a>
                            <div class="collapse" id="sidebarMaps">
                                <ul class="nav-second-level">
                                    <li>
                                        <a href="maps-google.html">Google</a>
                                    </li>
                                    <li>
                                        <a href="maps-vector.html">Vector</a>
                                    </li>
                                    <li>
                                        <a href="maps-mapael.html">Mapael</a>
                                    </li>
                                </ul>
                            </div>
                        </li>

                        <li>
                            <a href="#sidebarMultilevel" data-bs-toggle="collapse">
                                <i class="fe-folder-plus"></i>
                                <span> Multi Level </span>
                                <span class="menu-arrow"></span>
                            </a>
                            <div class="collapse" id="sidebarMultilevel">
                                <ul class="nav-second-level">
                                    <li>
                                        <a href="#sidebarMultilevel2" data-bs-toggle="collapse">
                                            Second Level <span class="menu-arrow"></span>
                                        </a>
                                        <div class="collapse" id="sidebarMultilevel2">
                                            <ul class="nav-second-level">
                                                <li>
                                                    <a href="javascript: void(0);">Item 1</a>
                                                </li>
                                                <li>
                                                    <a href="javascript: void(0);">Item 2</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </li>

                                    <li>
                                        <a href="#sidebarMultilevel3" data-bs-toggle="collapse">
                                            Third Level <span class="menu-arrow"></span>
                                        </a>
                                        <div class="collapse" id="sidebarMultilevel3">
                                            <ul class="nav-second-level">
                                                <li>
                                                    <a href="javascript: void(0);">Item 1</a>
                                                </li>
                                                <li>
                                                    <a href="#sidebarMultilevel4" data-bs-toggle="collapse">
                                                        Item 2 <span class="menu-arrow"></span>
                                                    </a>
                                                    <div class="collapse" id="sidebarMultilevel4">
                                                        <ul class="nav-second-level">
                                                            <li>
                                                                <a href="javascript: void(0);">Item 1</a>
                                                            </li>
                                                            <li>
                                                                <a href="javascript: void(0);">Item 2</a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </li> -->
                    </ul>

                </div>
                <!-- End Sidebar -->

                <div class="clearfix"></div>

            </div>