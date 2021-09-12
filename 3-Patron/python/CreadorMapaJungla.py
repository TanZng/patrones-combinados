import CreadorDeMapa
import Mazmorra
import Tesoro
import Textura
import Mapa


class CreadorMapaJungla(CreadorDeMapa):
    @property
    def mapa(self):
        return self.__mapa

    def crearMapa(self):
        mazmorra = Mazmorra()
        tesoro = Tesoro(100, 10000)
        textura = Textura("nieve.png", 100, 200)
        self.__mapa = Mapa(mazmorra, tesoro, textura)
        return self.__mapa
