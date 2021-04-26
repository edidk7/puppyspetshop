<template>
  <v-card class="mx-auto" max-width="344">
    <v-img
      src="https://lh3.googleusercontent.com/proxy/4vqw4ZuIahvm_BFRnBCzsaCc4DiTv2mHkke0-pn0SSs-CyiuriJBlOQNDW8qFxpq83cfR9CSr2PSog-2GX8VZ67Tafb8p01tqlGGnNDQTCEraGMjjYg8lw0SqCM"
      height="200px"
    ></v-img>

    <v-card-title> ALIMENTO PREMIUM ADULTO RAZA PEQUEÑA </v-card-title>

    <v-card-subtitle>
      FIT Fórmula MR Adulto Raza Pequeña, es un alimento completo y balanceado
      desarrollado con ingredientes de alta digestibilidad, maximizando la
      capacidad de su mascota para absorber los nutrientes, satisfaciendo todos
      los requerimientos nutricionales de los perros adultos en mantención.
    </v-card-subtitle>

    <v-card-actions>
      <v-btn color="orange lighten-2" text> Detalles: </v-btn>

      <v-spacer></v-spacer>

      <v-btn icon @click="show = !show">
        <v-icon>{{ show ? "mdi-chevron-up" : "mdi-chevron-down" }}</v-icon>
      </v-btn>
    </v-card-actions>

    <v-expand-transition>
      <div v-show="show">
        <v-divider></v-divider>

        <v-card-text class="m-2">
          <h5>Formulado con:</h5>
          <ul>
            <li>
              Proteínas de alta calidad, para un mejor desarrollo muscular.
            </li>
            <li>Ácidos grasos esenciales DHA – Omega 3.</li>
            <li>Proteínas de alta calidad, para un mejor desarrollo</li>
          </ul>
        </v-card-text>
      </div>
    </v-expand-transition>
    <v-card-actions>
      <v-btn color="orange" text> Reservar </v-btn>

      <v-btn color="orange" text> Compartir </v-btn>
    </v-card-actions>
  </v-card>
</template>

<script>
export default {
  data: () => ({
    show: false,
  }),
};
</script>