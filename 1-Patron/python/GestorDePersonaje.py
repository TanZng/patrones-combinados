import GestorDeUltimate
import GestorDeArma
import GestorDeArmadura
import Personaje
class GestorDePersonaje:
    def __init__(self, personaje):
        self.__personaje = personaje

    def mejorarUltimate(self, incremento):
        gestor_ultimate = GestorDeUltimate(self.__personaje.ultimate)
        return gestor_ultimate.subirDeNivel(incremento)

    def mejorarArmadura(self, incremento):
        gestor_armadura = GestorDeArmadura(self.__personaje.armadura)
        return gestor_armadura.mejorarArmadura(incremento)

    def mejorarArma(self, incremento):
        gestor_arma = GestorDeArma(self.__personaje.arma)
        return gestor_arma.mejorarArma(incremento)

    def verStats(self):
        return self.__personaje.verStats()

    def generarPersonaje(self):
        gestor_ultimate = GestorDeUltimate(None)
        ultimate = gestor_ultimate.generarUltimate()
        gestor_arma = GestorDeArma(None)
        arma = gestor_arma.generarArma()
        gestor_armadura = GestorDeArmadura(None)
        armadura = gestor_armadura.generarArmadura()
        # gestor_experiencia
        self.__personaje = Personaje(ultimate, arma, armadura, experiencia)