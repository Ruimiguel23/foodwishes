<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href='https://fonts.googleapis.com/css?family=Roboto:100,300,400,500,700,900|Material+Icons' rel="stylesheet">
    <title>Food Wishes</title>
</head>
<body>
<div id="app">
    <v-app>
        <v-toolbar app absolute>
            <v-toolbar-side-icon></v-toolbar-side-icon>
            <v-spacer></v-spacer>
            <v-toolbar-title>foodwishes</v-toolbar-title>
            <v-spacer></v-spacer>
            <v-toolbar-items class="hidden-sm-and-down">

            </v-toolbar-items>
        </v-toolbar>
        <v-container fluid>
            <v-parallax src="{{asset('img/hero.jpg')}}">
                <v-layout
                    align-center
                    column
                    justify-center
                >
                    <h1 class="display-2 mb-3">Foodwishes</h1>
                </v-layout>
            </v-parallax>

            <v-layout row wrap>
                <v-layout row align-center justify-center text-xs-center>
                    <h1>Newest Recipes</h1>
                </v-layout>
                <v-container grid-list-md>
                    <v-layout row wrap align-center justify-space-between>
                        <v-flex xs8 md3>
                            <v-card>
                                <v-img src="{{asset('img/steak.jpg')}}"></v-img>
                                <v-card-title>
                                    <div>
                                        <span>Steak</span><br>
                                        <span>Steak with taters</span>
                                    </div>
                                </v-card-title>
                            </v-card>
                        </v-flex>
                        <v-flex xs8 md3>
                            <v-card>
                                <v-img src="{{asset('img/steak.jpg')}}"></v-img>
                                <v-card-title>
                                    <div>
                                        <span>Steak</span><br>
                                        <span>Steak with taters</span>
                                    </div>
                                </v-card-title>
                            </v-card>

                        </v-flex>
                        <v-flex xs8 md3>
                            <v-card>
                                <v-img src="{{asset('img/steak.jpg')}}"></v-img>
                                <v-card-title>
                                    <div>
                                        <span>Steak</span><br>
                                        <span>Steak with taters</span>
                                    </div>
                                </v-card-title>
                            </v-card>

                        </v-flex>
                        <v-flex xs8 md3>
                            <v-card>
                                <v-img src="{{asset('img/steak.jpg')}}"></v-img>
                                <v-card-title>
                                    <div>
                                        <span>Steak</span><br>
                                        <span>Steak with taters</span>
                                    </div>
                                </v-card-title>
                            </v-card>

                        </v-flex>

                    </v-layout>
                </v-container>
            </v-layout>
        </v-container>
    </v-app>
</div>
</body>
<script src="{{asset('js/recipes.js')}}"></script>
</html>
