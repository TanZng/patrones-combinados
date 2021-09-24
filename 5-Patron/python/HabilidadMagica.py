import abc


class HabilidadMagica(abc.ABC):
    @abc.abstractmethod
    def verInfoHabilidad(self):
        pass

    @abc.abstractmethod
    def subirNivelHabilidad(self):
        pass
