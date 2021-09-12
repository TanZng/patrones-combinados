import CreadorDeMapa
import Textura
import Mapa


class CreadorMapaLava(CreadorDeMapa):
    @property
    def mapa(self):
        return self.__mapa

    def crearMapa(self):
        mazmorra = None
        tesoro = None
        textura = Textura("nieve.png", 100, 200)
        self.__mapa = Mapa(mazmorra, tesoro, textura)
        return self.__mapa
