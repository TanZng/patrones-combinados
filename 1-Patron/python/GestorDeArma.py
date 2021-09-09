import Arma
import GestorDeUltimate
class GestorDeArma():
    def __init__(self, arma):
        self.__arma = arma

    def repararArma(self, incremento):
        self.__arma.duracion += incremento
        return self.__arma.duracion
    
    def mejorarArma(self, incremento):
        self.__arma.aumentarDaño(incremento)
        return self.__arma.incNivel()

    def cambiarHechizo(self, nombre_hechizo):
        return self.__arma.setHechizo(nombre_hechizo)

    def generarArma():
        return Arma("Arma Basic", 10, 100, 1)