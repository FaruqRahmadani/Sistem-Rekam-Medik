require('./bootstrap');

require('./Angle2/vendor/modernizr/modernizr.custom');
require('./Angle2/vendor/matchMedia/matchMedia');
// require('./Angle2/vendor/jquery/dist/jquery');
require('./Angle2/vendor/bootstrap/dist/js/bootstrap');
require('./Angle2/vendor/jQuery-Storage-API/jquery.storageapi');
require('./Angle2/vendor/jquery.easing/js/jquery.easing');
require('./Angle2/vendor/animo.js/animo');
require('./Angle2/vendor/slimScroll/jquery.slimscroll.min');
require('./Angle2/vendor/screenfull/dist/screenfull');
require('./Angle2/vendor/datatables/media/js/jquery.dataTables.min');
require('./Angle2/vendor/datatables-colvis/js/dataTables.colVis');
require('./Angle2/vendor/datatables/media/js/dataTables.bootstrap');
// require('./Angle2/vendor/datatables-buttons/js/dataTables.buttons');
// require('./Angle2/vendor/datatables-buttons/js/buttons.bootstrap');
// require('./Angle2/vendor/datatables-buttons/js/buttons.colVis');
// require('./Angle2/vendor/datatables-buttons/js/buttons.flash');
// require('./Angle2/vendor/datatables-buttons/js/buttons.html5');
// require('./Angle2/vendor/datatables-buttons/js/buttons.print');
require('./Angle2/vendor/datatables-responsive/js/dataTables.responsive');
require('./Angle2/vendor/datatables-responsive/js/responsive.bootstrap');
// require('./Angle2/vendor/jquery-localize-i18n/dist/jquery.localize');
require('./Angle2/app');
require('./custom');

var dtInstance2 = $('#datatable2').dataTable({
  'scrollX': true,
  'paging':   true,  // Table pagination
  'ordering': true,  // Column ordering
  'info':     true,  // Bottom left status text
  // 'responsive': true, // https://datatables.net/extensions/responsive/examples/
  // Text translation options
  // Note the required keywords between underscores (e.g _MENU_)
  oLanguage: {
    sSearch:      'Search all columns:',
    sLengthMenu:  '_MENU_ records per page',
    info:         'Showing page _PAGE_ of _PAGES_',
    zeroRecords:  'Nothing found - sorry',
    infoEmpty:    'No records available',
    infoFiltered: '(filtered from _MAX_ total records)'
  }
});
