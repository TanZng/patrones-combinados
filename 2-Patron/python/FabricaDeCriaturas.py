import abc
class FabricaDeCriaturas(abc.ABC):
    @abc.abstractclassmethod
    def crearGrande():
        pass
    
    @abc.abstractclassmethod
    def crearPequeña():
        pass
