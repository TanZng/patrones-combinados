import AdaptadorCSkinLocal
import AdaptadorOSkinOnline


class GestorDeSkin:
    def __init__(self):
        self.__skinJugador = None

    @property
    def skinJugador(self):
        return self.__skinJugador

    @skinJugador.setter
    def skinJugador(self, new):
        self.__skinJugador = new

    def mostrarSkin(self):
        self.__skinJugador.mostrarSkin()

    def cambiarSkin(self, tipo, ruta):
        if (tipo == "Online"):
            self.__skinJugador = AdaptadorOSkinOnline(ruta)
        else:
            self.__skinJugador = AdaptadorCSkinLocal(ruta)

        return self.__skinJugador
