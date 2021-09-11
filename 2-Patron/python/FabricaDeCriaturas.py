import abc


class FabricaDeCriaturas(abc.ABC):
    @abc.abstractclassmethod
    def crearGrande(self, nombre):
        pass

    @abc.abstractclassmethod
    def crearPequeña(self, nombre):
        pass
