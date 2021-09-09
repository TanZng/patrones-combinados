import Arma
import GestorDeUltimate
class GestorDeArma():
    def __init__(self, arma):
        self.__arma = arma

    def repararArma(self, incremento):
        self.__arma.duracion += incremento
    
    def mejorarArma(self, incremento):
        self.__arma.incNivel()
        return self.__arma.aumentarDaño(incremento)

    def cambiarHechizo(self, nombre_hechizo):
        return self.__arma.setHechizo(nombre_hechizo)

    def generarArma():
        return Arma("Arma Basic", 10, 100, 1)