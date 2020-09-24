<hr class="divider-d">
        <footer class="page-footer bg-primary font-small unique-color-primary">
            <div class="container-fluid mt-3">
                <div style="width: 100%; background-color: #3E3F3A; margin-left: 0px;" class="row justify-content-center">
                    <div style="color: white;" class="footer-copyright text-center py-3">&copy; 2019, Copyright: Soumodeep Ganguly
                </div>
                </div>
            </div>
        </footer>

<script src="../js/popper.min.js"></script>
<script src="../js/particles.js"></script>
<script src="../js/app.js"></script>
<script src="../js/all.min.js"></script>
<script src="../js/fontawesome.min.js"></script>
<script src="../js/bootstrap.min.js"></script>
<script type="text/javascript">
	$(function(){
		$('.nav-item a').filter(function(){return this.href==location.href}).parent().addClass('active').siblings().removeClass('active')
		$('.nav-item a').click(function(){
			$(this).parent().addClass('active').siblings().removeClass('active')	
		})
	})
</script>
</body>
</html>