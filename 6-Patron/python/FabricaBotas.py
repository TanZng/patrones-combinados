import abc


class FabricaBotas(abc.ABC):
    @abc.abstractmethod
    def crearBotas(self):
        pass
