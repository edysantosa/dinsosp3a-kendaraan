// Include2 semua script bawaan template disini
import 'datatables.net-bs4/css/dataTables.bootstrap4.css';
try {
    window.$ = window.jQuery = require('jquery');
    window.Popper = require('popper.js/dist/umd/popper.js').default;
    require('bootstrap');
    require ('../template-resources/js/modernizr.min.js');
    require ('../template-resources/js/detect.js');
    require ('../template-resources/js/jquery.slimscroll.js');
    require ('../template-resources/js/horizontal-menu.js');
    require ('../template-resources/js/main.js');

    require( 'datatables.net-bs4' )( window, $ );
    require( 'datatables.net-responsive-bs4' )( window, $ );
    require( 'datatables.net-select-bs4' )( window, $ );
    require( 'datatables.net-buttons-bs4' )( window, $ );
} catch (e) {}


