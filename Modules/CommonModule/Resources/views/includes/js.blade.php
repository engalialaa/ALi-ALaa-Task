<script>
    var hostUrl = "assets/";

</script>
<!--begin::Javascript-->
<!--begin::Global Javascript Bundle(used by all pages)-->

<script src="{{asset('dashboard/assets/plugins/global/plugins.bundle.js')}}"></script>
<script src="{{asset('dashboard/assets/js/scripts.bundle.js')}}"></script>
<script src="{{asset('dashboard/assets/js/custom/widgets.js')}}"></script>
<script src="{{asset('dashboard/assets/js/custom/apps/chat/chat.js')}}"></script>
<script src="{{asset('dashboard/assets/js/custom/modals/create-app.js')}}"></script>
<script src="{{asset('dashboard/assets/js/custom/modals/upgrade-plan.js')}}"></script>

<script  src="{{ asset('dashboard/plugins/select2/select2.min.js')}}" ></script>
<script  src="{{ asset('dashboard/plugins/select2/custom-select2.js')}}" ></script>

<script src="{{ asset('dashboard/js/filepond-plugin-image-preview.js')}}"></script>
<script src="{{ asset('dashboard/js/filepond-plugin-file-validate-type.js')}}"></script>

<script src="{{ asset('dashboard/js/filepond.js')}}"></script>
<!-- Venobox -->
<script src="{{ asset('dashboard/plugins/table/datatable/datatables.js')}}"></script>
<script src="{{asset('dashboard/assets/plugins/custom/datatables/datatables.bundle.js')}}"></script>
<script>
    $('.select22').select2({
        dropdownParent:"#myTabContent",
        dir: 'rtl',
    }).on('select2:open', (e) => {
        //document.querySelector('#PageModal .select2-search__field').focus();
    });

</script>

@yield('js')
