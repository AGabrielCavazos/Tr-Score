

            <div class="row d-flex justify-content-center">
                <div class="info">
                    <h2 class="separar">Player 1</h2>
                    <form action="lector.php" method="POST">
                        <input type="hidden" name="Jugador" value ="1">
                        <div class="form-row align-items-center">
                        <div class="col-auto separar">
                            <label for="Nombre1">Nombre</label>
                            <input type="text" class="form-control mb-2" id="Nombre1" name ="nombre" placeholder="Tr/Mosby">
                        </div>
                        <div class="col-auto separar">
                            <label for="Puntuacion1">Puntuacion</label>
                            <div class="input-group mb-2">
                            <input type="text" class="form-control" id="Puntuacion1" name="puntos" placeholder="-10">
                            </div>
                        </div>
                        <div class="col-auto separar">
                                <label for="Crew">Crew</label>
                                <select class="custom-select" id="Crew1" name="Crew">
                                        <option selected value="0">Ninguna</option>
                                        <option value="1">One</option>
                                        <option value="2">Two</option>
                                        <option value="3">Three</option>
                                </select>
                        </div>
                        <div class="col-auto separar">
                            <button type="submit" class="btn btn-primary mb-2">Guardar</button>
                        </div>
                        </div>
                    </form>
                </div>

            </div>



            <div class="row d-flex justify-content-center">
                    <div class="info">
                        <h2 class="separar">Player 2</h2>
                        <form action="lector.php" method="POST">
                            <input type="hidden" name="Jugador" value ="2">
                            <div class="form-row align-items-center">
                            <div class="col-auto separar">
                                <label for="Nombre1">Nombre</label>
                                <input type="text" class="form-control mb-2" id="Nombre2" name ="nombre" placeholder="Tr/Mosby">
                            </div>
                            <div class="col-auto separar">
                                <label for="Puntuacion1">Puntuacion</label>
                                <div class="input-group mb-2">
                                <input type="text" class="form-control" id="Puntuacion2" name="puntos" placeholder="-10">
                                </div>
                            </div>
                            <div class="col-auto separar">
                                    <label for="Crew">Crew</label>
                                    <select class="custom-select" id="Crew2" name="Crew">
                                            <option selected value="0">Ninguna</option>
                                            <option value="1">One</option>
                                            <option value="2">Two</option>
                                            <option value="3">Three</option>
                                    </select>
                            </div>
                            <div class="col-auto separar">
                                <button type="submit" class="btn btn-primary mb-2">Guardar</button>
                            </div>
                            </div>
                        </form>
                    </div>
    
                </div>
                <script src="js/editor.js"></script>