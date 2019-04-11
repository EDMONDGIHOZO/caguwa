@extends('backEnd.layouts.master')
@section('title','Caguwa| Dashboard')
@section('content')
<!--breadcrumbs-->
<div id="content-header">
    <div id="breadcrumb"> <a href="index.html" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a>
    </div>
</div>
<!--End-breadcrumbs-->

<!--Action boxes-->
<div class="container-fluid">

    <div class="col-sm-6">
        <div class="card">
            <div class="card-title">
                <h1>New Sellers Requests </h1>
            </div>
            <div class="card-content">
                No Seller
            </div>
        </div>
        <div class="card">
            <div class="card-title">
                <h1>Orders </h1>
            </div>
            <div class="card-content">
                not yet implemented
            </div>
        </div>
        <div class="card">
            <div class="card-title">
                <h1>Sold Products </h1>
            </div>
            <div class="card-content">
                no Product sold
            </div>
        </div>
        <div class="card">
            <div class="card-title">
                <h1>In store </h1>
            </div>
            <div class="card-content">
                No Product yet
            </div>
        </div>
        <div class="card">
            <div class="card-title">
                <h1>Customer Care </h1>
            </div>
            <div class="card-content">
                No New Message
            </div>
        </div>
    </div>


</div>
@endsection
@section('jsblock')
<script src="{{asset('js/excanvas.min.js')}}"></script>
<script src="{{asset('js/jquery.min.js')}}"></script>
<script src="{{asset('js/jquery.ui.custom.js')}}"></script>
<script src="{{asset('js/bootstrap.min.js')}}"></script>
<script src="{{asset('js/jquery.flot.min.js')}}"></script>
<script src="{{asset('js/jquery.flot.resize.min.js')}}"></script>
<script src="{{asset('js/jquery.peity.min.js')}}"></script>
<script src="{{asset('js/fullcalendar.min.js')}}"></script>
<script src="{{asset('js/matrix.js')}}"></script>
<script src="{{asset('js/matrix.dashboard.js')}}"></script>
<script src="{{asset('js/jquery.gritter.min.js')}}"></script>
<script src="{{asset('js/matrix.interface.js')}}"></script>
<script src="{{asset('js/matrix.chat.js')}}"></script>
<script src="{{asset('js/jquery.validate.js')}}"></script>
<script src="{{asset('js/jquery.wizard.js')}}"></script>
<script src="{{asset('js/jquery.uniform.js')}}"></script>
<script src="{{asset('js/select2.min.js')}}"></script>
<script src="{{asset('js/matrix.popover.js')}}"></script>
<script src="{{asset('js/jquery.dataTables.min.js')}}"></script>
<script src="{{asset('js/matrix.tables.js')}}"></script>
<script src="{{asset('js/matrix.form_validation.js')}}"></script>
<script type="text/javascript">
    // This function is called from the pop-up menus to transfer to
    // a different page. Ignore if the value returned is a null string:
    function goPage(newURL) {

        // if url is empty, skip the menu dividers and reset the menu selection to default
        if (newURL != "") {

            // if url is "-", it is this page -- reset the menu:
            if (newURL == "-") {
                resetMenu();
            }
            // else, send page to designated URL
            else {
                document.location.href = newURL;
            }
        }
    }

    // resets the menu selection upon entry to this page:
    function resetMenu() {
        document.gomenu.selector.selectedIndex = 2;
    }
</script>
@endsection
