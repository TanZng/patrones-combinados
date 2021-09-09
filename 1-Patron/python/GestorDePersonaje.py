import GestorDeUltimate
import Personaje
class GestorDePersonaje:
    def __init__(self, personaje):
        self.__personaje = personaje

    def mejorarUltimate(self, incremento):
        gestor_ultimate = GestorDeUltimate(self.__personaje.ultimate)
        gestor_ultimate.subirDeNivel(incremento)

    def mejorarUltimate(self):
        pass

    def mejorarArmadura(self):
        pass

    def mejorarArma(self):
        pass

    def verStats(self):
        pass

    def generarPersonaje(self):
        gestor_ultimate = GestorDeUltimate(None)
        ultimate = gestor_ultimate.generarUltimate()
        # gestor_arma
        # gestor_armadura
        # gestor_experiencia
        self.__personaje = Personaje(ultimate, arma, armadura, experiencia)