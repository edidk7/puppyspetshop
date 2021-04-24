<template>
	<v-app id="inspire">
		<v-main>
			<v-container class="fill-height" fluid>
				<v-row align="center" justify="center">
					<v-col cols="12" sm="8" md="4">
						<v-card class="elevation-12">
							<v-toolbar dark flat>
								<v-toolbar-title
									>Inicio de sesión</v-toolbar-title
								>
								<v-spacer></v-spacer>
							</v-toolbar>
							<v-card-text>
								<v-alert v-show="showError.show" type="error">
									{{ showError.details }}
								</v-alert>

								<v-form>
									<v-text-field
										v-model="form.email"
										:error-messages="emailErrors"
										@input="$v.form.email.$touch()"
										@blur="$v.form.email.$touch()"
										label="Email"
										name="email"
										prepend-icon="person"
										type="text"
									/>

									<v-text-field
										v-model="form.password"
										:error-messages="passwordErrors"
										@input="$v.form.password.$touch()"
										@blur="$v.form.password.$touch()"
										label="Contraseña"
										name="password"
										prepend-icon="lock"
										type="password"
									/>
								</v-form>
							</v-card-text>
							<v-card-actions>
								<v-spacer></v-spacer>
								<v-btn
									color="primary"
									:loading="loading"
									@click="sendForm()"
									>Ingresar</v-btn
								>
							</v-card-actions>
						</v-card>
					</v-col>
				</v-row>
			</v-container>
		</v-main>
	</v-app>
</template>

<script>
import { validationMixin } from "vuelidate";
import { required, email } from "vuelidate/lib/validators";

import axios from "axios";

export default {
	mixins: [validationMixin],
	props: {
		action: String,
	},
	data: function () {
		return {
			loading: false,
			showError: {
				show: false,
				details: null,
			},
			form: {
				email: null,
				password: null,
			},
		};
	},
	validations: {
		form: {
			email: {
				required,
				email
			},
			password: {
				required,
			},
		},
	},
	computed: {
		emailErrors() {
			const errors = [];
			if (!this.$v.form.email.$dirty) return errors;
			!this.$v.form.email.required &&
				errors.push("Este campo es obligatorio");
			!this.$v.form.email.email &&
				errors.push("Debes ingresar un email válido");
			return errors;
		},
		passwordErrors() {
			const errors = [];
			if (!this.$v.form.password.$dirty) return errors;
			!this.$v.form.password.required &&
				errors.push("Este campo es obligatorio");
			return errors;
		},
	},
	methods: {
		sendForm: function () {
			const isValid = this.validateForm();

			if (isValid) {
				this.loading = true;

				axios
					.post(this.action, this.form)
					.then((response) => {
						if (response.data.message === "ok") {
							window.location.href = response.data.route;
						} else if (response.data.message === "error") {
							this.showError.show = true;
							this.showError.details = response.data.details;
							this.loading = false;
						}
					})
					.catch((error) => {
						this.loading = false;
						console.error(error);
					});
			}
		},
		validateForm: function () {
			this.$v.form.password.$touch();

			if (this.$v.form.password.$invalid) return false;

			return true;
		},
	},
};
</script>
