<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

<!-- Vendor styles -->
<link rel="stylesheet" href="{{asset('vendors/material-design-iconic-font/css/material-design-iconic-font.min.css')}}">
<link rel="stylesheet" href="{{asset('vendors/animate.css/animate.min.css')}}">
<link rel="stylesheet" href="{{asset('vendors/jquery-scrollbar/jquery.scrollbar.css')}}">
<link rel="stylesheet" href="{{asset('vendors/fullcalendar/fullcalendar.min.css')}}">
<link rel="stylesheet" href="{{asset('vendors/lightgallery/css/lightgallery.min.css')}}">

{{-- Sweet Alert 2  --}}
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>

<!-- App styles -->
<link rel="stylesheet" href="{{asset('/css/app.min.css')}}">

<!-- Quick styles & Overrides -->
<style>
	.logo_sidebar
	{
		padding:0 .8rem .8rem .8rem;
	}
  .row
  {
    margin:0;
  }

	@media only screen and (min-width: 800px) 
	{
		.logo_sidebar 
		{
			display:none;
		}
	}

@media (min-width: 1366px) {
  [data-columns]:before {
    content: '3 .column.size-1of3'; } }

@media (min-width: 768px) {
  [data-columns] {
    margin: 0 -15px; }
    [data-columns] .column {
      padding: 0 15px; } }

@media (min-width: 768px) and (max-width: 1365px) {
  [data-columns]:before {
    content: '2 .column.size-1of2'; } }

@media screen and (max-width: 767px) {
  [data-columns] {
    margin: 0 -10px; }
    [data-columns] .column {
      padding: 0 10px; }
    [data-columns]:before {
      content: '1 .column.size-1of1'; } }	
</style>
