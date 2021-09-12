import CreadorMapaNieve
import CreadorMapaLava
import CreadorMapaJungla


class GeneradorDeMapa():
    @property
    def mapa(self):
        return self.__mapa

    @property
    def tipo(self):
        return self.__tipo

    def setTipo(self, tipo):
        if tipo == "nieve":
            self.__tipo = CreadorMapaNieve()
        elif tipo == "lava":
            self.__tipo = CreadorMapaLava()
        elif tipo == "jungla":
            self.__tipo = CreadorMapaJungla()

    def generar(self):
        if self.__tipo == None:
            return None
        self.__mapa = self.__tipo.crearMapa()
        return self.__mapa

    def verMapa(self):
        return self.__mapa.verMapa()
