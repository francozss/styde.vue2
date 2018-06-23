new Vue({
	el: "#app",
	data: {
		first_name: '',
		last_name: '',
		formSubmitted: false
	},
	methods: {
		isFormValid: function(){
			return this.first_name != "" && this.last_name != "";
		},
		submitForm: function(){
			if (!this.isFormValid()) return;

			this.formSubmitted = true;
		}
	}
});