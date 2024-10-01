<div class="sidebar" id="sidebar">
    <div class="sidebar-inner slimscroll">
        <div id="sidebar-menu" class="sidebar-menu">
            <ul>
                <li class="active">
                    <a href="index.html"><img src="{{ asset('img/icons/dashboard.svg') }}" alt="img"><span> Dashboard</span></a>
                </li>
                <li class="submenu">
                    <a href="javascript:void(0);"><img src="{{ asset('img/icons/product.svg') }}" alt="img"><span> Actualités</span> <span class="menu-arrow"></span></a>
                    <ul>
                        <li><a href="{{ route('news.create') }}">Ajouter une actualité</a></li>
                        <li><a href="{{ route('news.index_admin') }}">Voir toutes les actualités</a></li>
                        {{-- <li><a href="categorylist.html">Category List</a></li> --}}
                        {{-- <li><a href="addcategory.html">Add Category</a></li>
                        <li><a href="subcategorylist.html">Sub Category List</a></li>
                        <li><a href="subaddcategory.html">Add Sub Category</a></li>
                        <li><a href="brandlist.html">Brand List</a></li>
                        <li><a href="addbrand.html">Add Brand</a></li>
                        <li><a href="importproduct.html">Import Products</a></li>
                        <li><a href="barcode.html">Print Barcode</a></li> --}}
                    </ul>
                </li>
                <li class="submenu">
                    <a href="javascript:void(0);"><img src="{{ asset('img/icons/sales1.svg') }}" alt="img"><span> Vidéos</span> <span class="menu-arrow"></span></a>
                    <ul>
                        <li><a href="{{ route('videos.create') }}">Ajouter une nouvelle vidéo</a></li>
                        <li><a href="pos.html">Voir toutes nos vidéos</a></li>
                        {{-- <li><a href="new-sales.html">New Sales</a></li>
                        <li><a href="salesreturnlists.html">Sales Return List</a></li>
                        <li><a href="createsalesreturns.html">New Sales Return</a></li> --}}
                    </ul>
                </li>
               
                <li class="submenu">
                    <a href="javascript:void(0);"><img src="{{ asset('img/icons/places.svg') }}" alt="img"><span> Demande de credit ou de prêts</span> <span class="menu-arrow"></span></a>
                    <ul>
                        <li><a href="newcountry.html">Voir les demandes</a></li>
                        {{-- <li><a href="countrieslist.html">Countries List</a></li>
                        <li><a href="newstate.html">New State</a></li>
                        <li><a href="statelist.html">State List</a></li> --}}
                    </ul>
                </li>
                <li>
                    <a href="components.html"><i data-feather="layers"></i><span> Components</span></a>
                </li>
                <li>
                    <a href="blankpage.html"><i data-feather="file"></i><span> Blank Page</span></a>
                </li>
                <li class="submenu">
                    <a href="javascript:void(0);"><i data-feather="alert-octagon"></i> <span> Error Pages </span> <span class="menu-arrow"></span></a>
                    <ul>
                        <li><a href="error-404.html">404 Error</a></li>
                        <li><a href="error-500.html">500 Error</a></li>
                    </ul>
                </li>
                <li class="submenu">
                    <a href="javascript:void(0);"><i data-feather="box"></i> <span> Elements </span> <span class="menu-arrow"></span></a>
                    <ul>
                        <li><a href="sweetalerts.html">Sweet Alerts</a></li>
                        <li><a href="tooltip.html">Tooltip</a></li>
                        <li><a href="popover.html">Popover</a></li>
                        <li><a href="ribbon.html">Ribbon</a></li>
                        <li><a href="clipboard.html">Clipboard</a></li>
                        <li><a href="drag-drop.html">Drag & Drop</a></li>
                        <li><a href="rangeslider.html">Range Slider</a></li>
                        <li><a href="rating.html">Rating</a></li>
                        <li><a href="toastr.html">Toastr</a></li>
                        <li><a href="text-editor.html">Text Editor</a></li>
                        <li><a href="counter.html">Counter</a></li>
                        <li><a href="scrollbar.html">Scrollbar</a></li>
                        <li><a href="spinner.html">Spinner</a></li>
                        <li><a href="notification.html">Notification</a></li>
                        <li><a href="lightbox.html">Lightbox</a></li>
                        <li><a href="stickynote.html">Sticky Note</a></li>
                        <li><a href="timeline.html">Timeline</a></li>
                        <li><a href="form-wizard.html">Form Wizard</a></li>
                    </ul>
                </li>
                <li class="submenu">
                    <a href="javascript:void(0);"><i data-feather="bar-chart-2"></i> <span> Charts </span> <span class="menu-arrow"></span></a>
                    <ul>
                        <li><a href="chart-apex.html">Apex Charts</a></li>
                        <li><a href="chart-chartjs.html">Chartjs</a></li>
                        <li><a href="chart-flot.html">Flot Charts</a></li>
                        <li><a href="chart-knob.html">Knob Charts</a></li>
                        <li><a href="chart-morris.html">Morris Charts</a></li>
                        <li><a href="chart-peity.html">Peity Charts</a></li>
                        <li><a href="chart-sparkline.html">Sparkline Charts</a></li>
                    </ul>
                </li>
                <li>
                    <a href="settings.html"><i data-feather="settings"></i> <span> Settings </span></a>
                </li>
            </ul>
        </div>
    </div>
</div>


