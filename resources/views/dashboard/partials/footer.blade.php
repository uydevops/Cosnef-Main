<footer class="footer">
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-6">
                © Cosneff Laser Technology.
            </div>
            <div class="col-sm-6">
                <div class="text-sm-end d-none d-sm-block text-muted">
                  <b class="text-primary">Altf4 Yazılım</b> 
                </div>
            </div>
        </div>
    </div>
</footer>
</div>
</div>

<div class="rightbar-overlay"></div>

<!-- JAVASCRIPT -->
<script src="{{ asset('assets/libs/jquery/jquery.min.js') }}"></script>
<script src="{{ asset('assets/libs/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<script src="{{ asset('assets/libs/metismenu/metisMenu.min.js') }}"></script>
<script src="{{ asset('assets/libs/simplebar/simplebar.min.js') }}"></script>
<script src="{{ asset('assets/libs/node-waves/waves.min.js') }}"></script>


<script src="{{ asset('assets/libs/morris.js/morris.min.js') }}"></script>
<script src="{{ asset('assets/libs/raphael/raphael.min.js') }}"></script>
<script src="{{ asset('assets/libs/jquery-knob/jquery.knob.min.js') }}"></script>
<script src="{{ asset('assets/libs/metrojs/release/MetroJs.Full/MetroJs.min.js') }}"></script>

<script src="{{ asset('assets/js/pages/dashboard.init.js') }}"></script>

<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>


<script src="{{ asset('assets/js/app.js') }}"></script>
@include('dashboard.partials.task_js')


<script>
    @if(session('success'))
    swal("Başarılı!", "{{ session('success') }}", "success");
    @endif

</script>



</body>

</html>
