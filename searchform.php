<div id="busca">
	<form role="search" method="get" action="<?php echo esc_url( home_url( '/' ) ); ?>">
	<input id="searchsubmit" type="submit" value="OK" />
	<input type="text" value="O que você está procurando?" name="s" id="s" onblur="if (this.value == ''){this.value = 'O que você está procurando?';}" onfocus="if (this.value == 'O que você está procurando?'){this.value = '';}" /> 
	</form>
</div>