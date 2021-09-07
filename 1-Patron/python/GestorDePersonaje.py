import GestorDeUltimate
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