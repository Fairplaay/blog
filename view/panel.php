<script src="https://cdn.jsdelivr.net/npm/vue"></script></script>
<!--<script src="https://cdn.jsdelivr.net/npm/vue-resource@1.3.6"></script> -->

<div class="container">
	<div class="row" id="app">
		<div class="col-12">
			<form @submit.prevent="submit" action="">
				<h3>Cuales son tus cursos favoritos</h3>
				<template v-for="curso in cursos">	
				<curso :curso="curso" v-on:cheked="select"></curso>	
				<!--<input v-model="cursosSeleccionados" type="checkbox" v-bind:id="curso.value" v-bind:value="curso.value">
				<label v-bind:for="curso.value">{{ curso.nombre }}</label>-->
				</template>
				<input type="submit" value="Enviar">
			</form>
		</div>
	</div>
</div>


