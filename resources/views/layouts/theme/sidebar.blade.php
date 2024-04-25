<aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">
    <div class="app-brand demo">
        <a href="{{ route('home') }}" class="app-brand-link">
            <span class="app-brand-logo demo">
                <img src="{{ asset('assets/img/logo.png') }}" alt="" height="40" width="60">
            </span>
            <span class="app-brand-text demo menu-text fw-bolder ms-2">Syspros</span>
        </a>
        <a href="javascript:void(0);" class="layout-menu-toggle menu-link text-large ms-auto">
            <i class="bx bx-chevron-left bx-sm align-middle"></i>
        </a>
    </div>
    <div class="menu-inner-shadow"></div>

    <ul class="menu-inner py-1">
        @can('Ingresos_Index')
            <li
                class="menu-item {{ Request::is('ingresos') ? 'active' : '' }} {{ Request::is('nuevoIngreso') ? 'active' : '' }} {{ Request::is('historicos') ? 'active' : '' }}">
                <a href="javascript:void(0);" class="menu-link menu-toggle">
                    <i class='menu-icon tf-icons fa-solid fa-car'></i>
                    <div data-i18n="Ingresos">Ingresos</div>
                </a>
                <ul class="menu-sub">
                    @can('Ingresos_Create')
                        <li class="menu-item {{ Request::is('nuevoIngreso') ? 'active' : '' }}">
                            <a href="{{ route('nuevo') }}" class="menu-link">
                                <div data-i18n="Nuevo Ingreso">Nuevo Ingreso</div>
                            </a>
                        </li>
                    @endcan
                    @can('Ingresos_Index')
                        <li class="menu-item {{ Request::is('ingresos') ? 'active' : '' }}">
                            <a href="{{ route('ingresos') }}" class="menu-link">
                                <div data-i18n="Ver Ingresos">Ver Ingresos</div>
                            </a>
                        </li>
                    @endcan
                    @can('Ingresos_Historicos')
                        <li class="menu-item {{ Request::is('historicos') ? 'active' : '' }}">
                            <a href="{{ route('historicos') }}" class="menu-link">
                                <div data-i18n="Ingresos Historicos">Ingresos Historicos</div>
                            </a>
                        </li>
                    @endcan
                </ul>
            </li>
        @endcan
        @can('ClientesVehiculos_Index')
            <li
                class="menu-item {{ Request::is('clientes') ? 'active' : '' }} {{ Request::is('vehiculos') ? 'active' : '' }} {{ Request::is('marcas') ? 'active' : '' }}">
                <a href="javascript:void(0);" class="menu-link menu-toggle">
                    <i class="menu-icon fa-solid fa-users"></i>
                    <div data-i18n="Clientes y Vehiculos">Clientes y Vehiculos</div>
                </a>
                <ul class="menu-sub">
                    @can('Clientes_Index')
                        <li class="menu-item {{ Request::is('clientes') ? 'active' : '' }}">
                            <a href="{{ route('clientes') }}" class="menu-link">
                                <div data-i18n="Clientes">Clientes</div>
                            </a>
                        </li>
                    @endcan
                    @can('Vehículo_Index')
                        <li class="menu-item {{ Request::is('vehiculos') ? 'active' : '' }}">
                            <a href="{{ route('vehiculos') }}" class="menu-link">
                                <div data-i18n="Vehiculos">Vehiculos</div>
                            </a>
                        </li>
                    @endcan
                    @can('Marcas_Index')
                        <li class="menu-item {{ Request::is('marcas') ? 'active' : '' }}">
                            <a href="{{ route('marcas') }}" class="menu-link">
                                <div data-i18n="Marcas">Marcas</div>
                            </a>
                        </li>
                    @endcan
                </ul>
            </li>
        @endcan
        @can('AdminRevisiones_Index')
            <li class="menu-item {{ Request::is('partes') ? 'active' : '' }}">
                <a href="javascript:void(0);" class="menu-link menu-toggle"> <i class='menu-icon fa-solid fa-gauge-simple'></i>
                <div data-i18n="Admin Revisiones">Admin Revisiones</div>
            </a>
            <ul class="menu-sub">
                @can('Revision_Index')
                    <li class="menu-item {{ Request::is('revision') ? 'active' : '' }}">
                        <a href="{{ route('revision') }}" class="menu-link">
                            <div data-i18n="Revisiones">Revisiones</div>
                        </a>
                    </li>
                @endcan
                @can('Partes_Index')
                    <li class="menu-item {{ Request::is('partes') ? 'active' : '' }}">
                        <a href="{{ route('partes') }}" class="menu-link">
                            <div data-i18n="Partes">Partes</div>
                        </a>
                    </li>
                @endcan
            </ul>
        </li>
        @endcan
        @can('AdminProductos_Index')
            <li
                class="menu-item {{ Request::is('productos') ? 'active' : '' }} {{ Request::is('categorias') ? 'active' : '' }} {{ Request::is('medidas') ? 'active' : '' }}">
                <a href="javascript:void(0);" class="menu-link menu-toggle">
                    <i class='menu-icon tf-icons bx bxl-product-hunt'></i>
                    <div data-i18n="Admin Productos">Admin Productos</div>
                </a>
                <ul class="menu-sub">
                    @can('Productos_Index')
                        <li class="menu-item {{ Request::is('productos') ? 'active' : '' }}">
                            <a href="{{ route('productos') }}" class="menu-link">
                                <div data-i18n="Productos">Productos</div>
                            </a>
                        </li>
                    @endcan
                    @can('Categorías_Index')
                        <li class="menu-item {{ Request::is('categorias') ? 'active' : '' }}">
                            <a href="{{ route('categorias') }}" class="menu-link">
                                <div data-i18n="Categorias">Categorias</div>
                            </a>
                        </li>
                    @endcan
                    @can('Medidas_Index')
                        <li class="menu-item {{ Request::is('medidas') ? 'active' : '' }}">
                            <a href="{{ route('medidas') }}" class="menu-link">
                                <div data-i18n="Unidad Medida">Unidad Medida</div>
                            </a>
                        </li>
                    @endcan
                </ul>
            </li>
        @endcan
        @can('Admin_Inventarios')
            <li
                class="menu-item {{ Request::is('existencias') ? 'active' : '' }} {{ Request::is('solicitudes') ? 'active' : '' }} {{ Request::is('solicitudesVer') ? 'active' : '' }}">
                <a href="javascript:void(0)" class="menu-link menu-toggle">
                    <i class="menu-icon fa-solid fa-cart-flatbed-suitcase"></i>
                    <div data-i18n="Admin Inventarios">Admin Inventarios</div>
                </a>
                <ul class="menu-sub">
                    @can('Existencias_Index')
                        <li class="menu-item {{ Request::is('existencias') ? 'active' : '' }}">
                            <a href="{{ route('existencias') }}" class="menu-link">
                                <div data-i18n="Existencias">Existencias</div>
                            </a>
                        </li>
                    @endcan
                    @can('Solicitudes_Create')
                        <li class="menu-item {{ Request::is('solicitudes') ? 'active' : '' }}">
                            <a href="{{ route('solicitudes') }}" class="menu-link">
                                <i class="menu-icon fa-solid fa-file-edit"></i>
                                <div data-i18n="Nueva Solicitud">Nueva Solicitud</div>
                            </a>
                        </li>
                    @endcan
                    @can('Solicitudes_Index')
                        <li class="menu-item {{ Request::is('solicitudesVer') ? 'active' : '' }}">
                            <a href="{{ route('solicitudesVer') }}" class="menu-link">
                                <i class="menu-icon fa-solid fa-clipboard-list"></i>
                                <div data-i18n="Solicitudes Realizadas">Solicitudes Realizadas</div>
                            </a>
                        </li>
                    @endcan
                    @can('Kardex_Index')
                        <li class="menu-item {{ Request::is('kardex') ? 'active' : '' }}">
                            <a href="{{ route('kardex') }}" class="menu-link">
                                <div data-i18n="Kardex">Kardex</div>
                            </a>
                        </li>
                    @endcan
                </ul>
            </li>
            <!-- kardex -->
            <!-- ajuste de inventario -->
            <!-- movimientos -->
        @endcan
        <!-- Clientes -->
        @can('Proveedores_Index')
            <li class="menu-item {{ Request::is('proveedores') ? 'active' : '' }}">
                <a href="{{ route('proveedores') }}" class="menu-link">
                    <i class='menu-icon tf-icons bx bx-user-circle'></i>
                    <div data-i18n="Proveedores">Proveedores</div>
                </a>
            </li>
        @endcan
        <!-- Compras, Envio, Descargos, Cotizaciones & Ventas -->
        @can('Compras_Index')
            <li class="menu-item {{ Request::is('compras') ? 'active' : '' }}">
                <a href="{{ route('compras') }}" class="menu-link">
                    <i class="menu-icon tf-icons bx bx-store-alt"></i>
                    <div data-i18n="Compras">Compras</div>
                </a>
            </li>
        @endcan
        @can('Facturar_Index')
            <li class="menu-item {{ Request::is('facturar') ? 'active' : '' }}">
                <a href="{{ route('facturar') }}" class="menu-link">
                    <i class="menu-icon fa-solid fa-cash-register"></i>
                    <div data-i18n="Facturar Ingresos">Facturar</div>
                </a>
            </li>
        @endcan
        @can('Ventas_Create')
            <li class="menu-item {{ Request::is('pos') ? 'active' : '' }}">
                <a href="{{ route('pos') }}" class="menu-link">
                    <i class="menu-icon fa-solid fa-cart-plus"></i>
                    <div data-i18n="Ventas">Ventas</div>
                </a>
            </li>
        @endcan

        @can('Ventas_Index')
            <li class="menu-item {{ Request::is('ventas') ? 'active' : '' }}">
                <a href="{{ route('ventas') }}" class="menu-link">
                    <i class="menu-icon fa-solid fa-shop"></i>
                    <div data-i18n="Ver Ventas">Ver Ventas</div>
                </a>
            </li>
        @endcan

        @can('Cotizaciones_Index')
            <li class="menu-item {{ Route::is('cotizaciones') || Route::is('editarCotizacion') || Route::is('nuevaCoti') ? 'active' : '' }}">
                <a href="{{ route('cotizaciones') }}" class="menu-link">
                    <i class="menu-icon fa-solid fa-hand-holding-dollar"></i>
                    <div data-i18n="Cotizaciones">Cotizaciones</div>
                </a>
            </li>
        @endcan
        <!--Financiero-->
        @can('Admin_Finanzas')
            <li
                class="menu-item {{ Request::is('creditos') ? 'active' : '' }} {{ Request::is('pagos') ? 'active' : '' }} {{ Request::is('planilla') ? 'active' : '' }}">
                <a href="javascript:void(0)" class="menu-link menu-toggle">
                    <i class="menu-icon fa-solid fa-chart-line"></i>
                    <div data-i18n="Admin Finanzas">Admin Finanzas</div>
                </a>
                <ul class="menu-sub">
                    @can('Creditos_Index')
                        <li class="menu-item {{ Request::is('creditos') ? 'active' : '' }}">
                            <a href="{{ route('creditos') }}" class="menu-link">
                                <div data-i18n="Cuentas por Cobrar">Cuentas por Cobrar</div>
                            </a>
                        </li>
                    @endcan
                    @can('Solicitudes_Create')
                        <li class="menu-item {{ Request::is('solicitudes') ? 'active' : '' }}">
                            <a href="{{ route('solicitudes') }}" class="menu-link">
                                <i class="menu-icon fa-solid fa-file-edit"></i>
                                <div data-i18n="Nueva Solicitud">Nueva Solicitud</div>
                            </a>
                        </li>
                    @endcan
                    @can('Solicitudes_Index')
                        <li class="menu-item {{ Request::is('solicitudesVer') ? 'active' : '' }}">
                            <a href="{{ route('solicitudesVer') }}" class="menu-link">
                                <i class="menu-icon fa-solid fa-clipboard-list"></i>
                                <div data-i18n="Solicitudes Realizadas">Solicitudes Realizadas</div>
                            </a>
                        </li>
                    @endcan
                </ul>
            </li>
            <!-- kardex -->
            <!-- ajuste de inventario -->
            <!-- movimientos -->
        @endcan
        <!--Reportes-->
        @can('Reportes_Index')
            <li class="menu-item {{ Request::is('reportesIngresos') ? 'active' : '' }}">
                <a href="javascript:void(0);" class="menu-link menu-toggle">
                    <i class="menu-icon fa-regular fa-file-archive"></i>
                    <div data-i18n="Reportes">Reportes</div>
                </a>
                <ul class="menu-sub">
                    <li class="menu-item {{ Request::is('reportesIngresos') ? 'active' : '' }}">
                        <a href="{{ route('reportesIngresos') }}" class="menu-link">
                            <div data-i18n="Reportes Ingreso">Reportes Ingresos</div>
                        </a>
                    </li>
                    <li class="menu-item {{ Request::is('reporteVentas') ? 'active' : '' }}">
                        <a href="{{ route('reporteVentas') }}" class="menu-link">
                            <div data-i18n="Reportes Ventas">Reportes Ventas</div>
                        </a>
                    </li>
                    <li class="menu-item {{ Request::is('reporteCompras') ? 'active' : '' }}">
                        <a href="{{ route('reporteCompras') }}" class="menu-link">
                            <div data-i18n="Reportes Compras">Reportes Compras</div>
                        </a>
                    </li>
                </ul>
            </li>
        @endcan
        <!--end Reportes-->
        <!-- Configuraciones-->
        @can('Configuraciones_Index')
            <li
                class="menu-item {{ Request::is('formas') ? 'active' : '' }} {{ Request::is('tipos') ? 'active' : '' }} {{ Request::is('roles') ? 'active' : '' }} {{ Request::is('permisos') ? 'active' : '' }} {{ Request::is('users') ? 'active' : '' }} {{ Request::is('asignar') ? 'active' : '' }}{{ Request::is('empresa') ? 'active' : '' }} {{ Request::is('sucursales') ? 'active' : '' }} {{ Request::is('paramentros') ? 'active' : '' }}">
                <a href="javascript:void(0);" class="menu-link menu-toggle">
                    <i class="menu-icon tf-icons bx bx-cog"></i>
                    <div data-i18n="Configuraciones">Configuraciones</div>
                </a>
                <ul class="menu-sub">
                    @can('User_Index')
                        <li class="menu-item {{ Request::is('users') ? 'active' : '' }}">
                            <a href="{{ route('users') }}" class="menu-link">
                                <div data-i18n="Users">Users</div>
                            </a>
                        </li>
                    @endcan
                    @can('RolesPermisos_Index')
                        <li
                            class="menu-item {{ Request::is('roles') ? 'active' : '' }} {{ Request::is('permisos') ? 'active' : '' }} {{ Request::is('asignar') ? 'active' : '' }}">
                            <a href="javascript:void(0);" class="menu-link menu-toggle">
                                <div data-i18n="Roles & Permisos">Roles & Permisos</div>
                            </a>
                            <ul class="menu-sub">
                                @can('Roles_Index')
                                    <li class="menu-item {{ Request::is('roles') ? 'active' : '' }}">
                                        <a href="{{ route('roles') }}" class="menu-link">
                                            <div data-i18n="Roles">Roles</div>
                                        </a>
                                    </li>
                                @endcan
                                @can('Permisos_Index')
                                    <li class="menu-item {{ Request::is('permisos') ? 'active' : '' }}">
                                        <a href="{{ route('permisos') }}" class="menu-link">
                                            <div data-i18n="Permission">Permission</div>
                                        </a>
                                    </li>
                                @endcan
                                @can('Asignar_Index')
                                    <li class="menu-item {{ Request::is('asignar') ? 'active' : '' }}">
                                        <a href="{{ route('asignar') }}" class="menu-link">
                                            <div data-i18n="Asignar">Asignar</div>
                                        </a>
                                    </li>
                                @endcan
                            </ul>
                        </li>
                    @endcan
                    @can('Formas_Index')
                        <li class="menu-item {{ Request::is('formas') ? 'active' : '' }}">
                            <a href="{{ route('formas') }}" class="menu-link">
                                <div data-i18n="Formas de Pago">Formas de Pago</div>
                            </a>
                        </li>
                    @endcan
                    @can('Documentos_Index')
                        <li class="menu-item {{ Request::is('tipos') ? 'active' : '' }}">
                            <a href="{{ route('tipos') }}" class="menu-link">
                                <div data-i18n="Tipos de Documentos">Tipos de Documentos</div>
                            </a>
                        </li>
                    @endcan
                    @can('Facturadores_Index')
                        <li class="menu-item {{ Request::is('facturador') ? 'active' : '' }}">
                            <a href="{{ route('facturador') }}" class="menu-link">
                                <div data-i18n="Facturadores">Facturadores</div>
                            </a>
                        </li>
                    @endcan
                    @can('AdminEmpresa_Index')
                        <!--Admin Empresa-->
                        <li
                            class="menu-item {{ Request::is('empresa') ? 'active' : '' }} {{ Request::is('sucursales') ? 'active' : '' }} {{ Request::is('paramentros') ? 'active' : '' }}">
                            <a href="javascript:void(0)" class="menu-link menu-toggle">
                                <div data-i18n="Admin Empresa">Admin Empresa</div>
                            </a>
                            <ul class="menu-sub">
                                @can('Empresa_Index')
                                    <li class="menu-item {{ Request::is('empresa') ? 'active' : '' }}">
                                        <a href="{{ route('empresa') }}" class="menu-link">
                                            <div data-i18n="Empresa">Empresa</div>
                                        </a>
                                    </li>
                                @endcan
                                @can('Sucursales_Index')
                                    <li class="menu-item {{ Request::is('sucursales') ? 'active' : '' }}">
                                        <a href="{{ route('sucursales') }}" class="menu-link">
                                            <div data-i18n="Sucursales">Sucursales</div>
                                        </a>
                                    </li>
                                @endcan
                                @can('Parametros_Index')
                                    <li class="menu-item {{ Request::is('parametros') ? 'active' : '' }}">
                                        <a href="{{ route('parametros') }}" class="menu-link">
                                            <div data-i18n="Parametros">Parametros</div>
                                        </a>
                                    </li>
                                @endcan
                            </ul>
                        </li>
                    @endcan
                </ul>
            </li>
        @endcan
    </ul>
</aside>
