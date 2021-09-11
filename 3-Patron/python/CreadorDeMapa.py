import abc


class CreadorDeMapa(abc.ABC):
    @abc.abstractmethod
    def crearMapa(self):
        pass
