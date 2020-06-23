export default{
		data: function(){
			return{
				seen: true,
				pic: '',
				show: false
			}
		},
		methods: {
			add: function(){
				alert('hi')
			},
			upload: function(){
				let form = new FormData(formelem)

				if (form.get('userfile') != false) {
					axios
					.post('/upfile', form)
					.then( function(){
						console.log('success')
						window.location.reload()
					})
					.catch(error => console.log(error))
				}
				else
				{
					alert('Select file')
				}
				
			},
			trig: function(){
				userfile.click()
			},
			store: function(){
				let form = new FormData(postform)

				if (form.get('title') != false && form.get('content') != false) {
					axios
					.post('/storepost', form)
					.then( function(){
						console.log('success')
					})
					.catch(error => console.log(error))
				}
				else
				{
					alert('warn')
				}
			}
		},
		mounted(){
			axios
			.get('http://127.0.0.1:8000/userid')
			.then(response => (this.pic = response.data))
			.catch(error => console.log(error));	
		},	
	}