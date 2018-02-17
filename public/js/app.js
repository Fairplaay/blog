



/*-----curswo vue-------*/
Vue.component('curso',{
props:['curso'], 
methods:{
	onchange:function(ev){
		this.$emit('checked', this.curso.value, ev.target.checked)
	}
},
template:`
<div>
<input  
type="checkbox" v-bind:id="curso.value" 
v-bind:value="curso.value" @change="onchange">
<label v-bind:for="curso.value">{{ curso.nombre }}</label>
</div>`});
let app = new Vue({
	el : '#app',
	data:{
		cursos:[
			{
				nombre: 'curso de vuejs',
				value:"vuejs"
			},
			{	nombre: "curso de laravel" ,
				value:"laravel"
			},
			{	nombre: "curso de php",
				value:"php"
			},
			{	nombre: "curso de java",
				value:"java"
			},
			{	nombre: "curso de base  de datos",
				value:"bd"
			}
		],
		cursosSeleccionados:[]
	},
	methods:{
		submit: function () {
			console.log('se ejecuta el metodo submit');
			console.log(this.cursosSeleccionados);
		},
		select: function(curso,checked){
			if (checked) {
				this.cursosSeleccionados.push();
			}else{
				let i=this.cursosSeleccionados.indexOf(curso);
				this.cursosSeleccionados.splice(i,1);
			}
		}
	}
});




