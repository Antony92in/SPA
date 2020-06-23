<template>
	<div>
		<h1>Your city</h1>
		<div>
		<input type="text" name="" v-model="city" v-on:keyup.enter="find" class="form-control" id="wein">
		<input type="submit" name="" v-on:click="find" class="btn btn-light">
		</div>
		<hr>
		<div id="content" v-if="seen">
			{{date}}
			<p>City: {{info.name}}</p>
			<p>Description: {{info.weather[0].description}}</p>
			<p>Temperature: {{info.main.temp}}</p>
		</div>
	</div>
</template>

<script type="text/javascript">
	export default{
		data: function(){
			return{
				info: '',
				city: null,
				seen:false,
				date: new Date()
			}
		},
		methods: {
			find: function(){
				axios
				.get(`https://cors-anywhere.herokuapp.com/http://api.openweathermap.org/data/2.5/weather?q=${this.city}&units=metric&appid=c2ee2eac40f73f9ed145c5867261e8c6&lang=ru`)
				.then(response => (this.info = response.data), this.seen = true)
				.catch(error => console.log(error))
			}
		},
		
	}
	
</script>

<style type="text/css">
#content{
	font-size: 20px;
}

#wein{
	max-width: 500px;
}
</style>