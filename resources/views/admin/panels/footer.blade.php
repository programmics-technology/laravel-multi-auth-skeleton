<!-- BEGIN: Footer-->
<footer class="footer {{($configData['footerType']=== 'footer-hidden') ? 'd-none':''}} footer-light">
  <p class="clearfix mb-0">
    <span class="float-md-left d-block d-md-inline-block mt-25">COPYRIGHT &copy; <script>document.write(new Date().getFullYear())</script>
    </span>
    <span class="float-md-right d-none d-md-block"><a class="ml-25" href="javascript:void();" target="_blank">{{ config('app.name') }}</a>, All rights Reserved</span>
  </p>
</footer>
<button class="btn btn-primary btn-icon scroll-top" type="button"><i data-feather="arrow-up"></i></button>
<!-- END: Footer-->
