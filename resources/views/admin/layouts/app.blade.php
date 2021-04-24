<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no, minimal-ui">

        <title>Puppy</title>
        <link rel="stylesheet" href="{{ asset('css/app.css') }}" class="">
    </head>
    <body>
        <div id="admin">
            <v-app id="inspire">
                <v-navigation-drawer v-model="drawer" app>
                    <v-list dense>
                        <v-list-item href="{{ route('admin.home') }}">
                            <v-list-item-action>
                                <v-icon color="{{ Request::routeIs('admin.home') ? "primary" : "" }}">mdi-home</v-icon>
                            </v-list-item-action>
                            <v-list-item-content>
                                <v-list-item-title class="{{ Request::routeIs('admin.home') ? "primary--text" : "" }}">Home</v-list-item-title>
                            </v-list-item-content>
                        </v-list-item>

                        <v-list-item>
                            <v-list-item-action>
                                <v-icon color="">mdi-format-list-bulleted</v-icon>
                            </v-list-item-action>
                            <v-list-item-content>
                                <v-list-item-title>Productos</v-list-item-title>
                            </v-list-item-content>
                        </v-list-item>
                    </v-list>

                    <v-col cols="12" class="ma-0 pa-0">
                        <v-row no-gutters>
                            <v-col cols="12" class="ma-0 px-5">
                                <v-divider></v-divider>
                            </v-col>
                            <v-col cols="12" class="ma-0 px-10 py-5">
                                <span class="user_data">
                                    {{ Auth::guard('admin')->user()->fullName }}
                                    Administrador
                                <br>
                                </span>
                            </v-col>
                        </v-row>
                    </v-col>

                    <v-col cols="12" class="ma-0 pa-0">
                        <v-row no-gutters>
                            <v-col cols="12" class="ma-0 px-5">
                                <v-divider></v-divider>
                            </v-col>
                            <v-col cols="12" class="ma-0 px-10 py-5">
                                <span class="user_data">
                                    <v-btn href="{{ route('admin.login.logout') }}" :block="true" color="#000" text>Cerrar Sesión</v-btn>
                                </span>
                            </v-col>
                        </v-row>
                    </v-col>
                </v-navigation-drawer>

                <v-app-bar color="dark" app dark>
                    <v-app-bar-nav-icon class="ml-1" @click.stop="drawer = !drawer"></v-app-bar-nav-icon>
                    <v-toolbar-title>PuppyPetShop</v-toolbar-title>
                </v-app-bar>

                <v-main style="background: #EEEEEE">
                    <v-container fluid>
                        <v-row class="fill-height">
                            <v-col>
                                @yield('content')
                            </v-col>
                        </v-row>
                    </v-container>
                </v-main>
            </v-app>
        </div>
        <script src="{{ asset('js/admin.js') }}"></script>
    </body>
</html>
