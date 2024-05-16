
<script>
    //Uğurcan Yaş Extension
    document.addEventListener("DOMContentLoaded", function() {
        var table = document.getElementById('datatable-buttons');
        for (var i = 0, row; row = table.rows[i]; i++) {
            for (var j = 0, cell; cell = row.cells[j]; j++) {
                if (cell.innerHTML.trim() === '') {
                    cell.innerHTML = '<span class="empty-cell">Boş Bırakılmış<i class="fas fa-exclamation-circle ms-1"></i></span>';
                }
            }  
        }
        
        setInterval(function() { //SetInterval Görevi ile 1 saniyede bir boş hücreleri göster/gizle
            var emptyCells = document.querySelectorAll('.empty-cell');
            emptyCells.forEach(function(cell) {
                cell.style.visibility = cell.style.visibility === 'visible' ? 'hidden' : 'visible';
            });
        }, 1000);
    });
</script>

<style>
    .empty-cell {
        color: red;
    }
</style>
<link href="{{ asset('assets/libs/datatables.net-bs4/css/dataTables.bootstrap4.min.css') }}" rel="stylesheet" type="text/css" />
<link href="{{ asset('assets/libs/datatables.net-buttons-bs4/css/buttons.bootstrap4.min.css') }}" rel="stylesheet" type="text/css" />
<link href="{{ asset('assets/libs/datatables.net-responsive-bs4/css/responsive.bootstrap4.min.css') }}" rel="stylesheet" type="text/css" />
<script src="{{ asset('assets/libs/datatables.net/js/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('assets/libs/datatables.net-bs4/js/dataTables.bootstrap4.min.js') }}"></script>
<script src="{{ asset('assets/libs/datatables.net-buttons/js/dataTables.buttons.min.js') }}"></script>
<script src="{{ asset('assets/libs/datatables.net-buttons-bs4/js/buttons.bootstrap4.min.js') }}"></script>
<script src="{{ asset('assets/libs/jszip/jszip.min.js') }}"></script>
<script src="{{ asset('assets/libs/pdfmake/build/pdfmake.min.js') }}"></script>
<script src="{{ asset('assets/libs/pdfmake/build/vfs_fonts.js') }}"></script>
<script src="{{ asset('assets/libs/datatables.net-buttons/js/buttons.html5.min.js') }}"></script>
<script src="{{ asset('assets/libs/datatables.net-buttons/cc/buttons.print.min.js') }}"></script>
<script src="{{ asset('assets/libs/datatables.net-buttons/js/buttons.colVis.min.js') }}"></script>
<script src="{{ asset('assets/libs/datatables.net-responsive/js/dataTables.responsive.min.js') }}"></script>
<script src="{{ asset('assets/libs/datatables.net-responsive-bs4/js/responsive.bootstrap4.min.js') }}"></script>
<script src="{{ asset('assets/js/pages/datatables.init.js') }}"></script>