import abc
class FabricaDeCriaturas(abc.ABC):
    @abc.abstractclassmethod
    def crearMascota():
        pass
    
    @abc.abstractclassmethod
    def crearMonstruo():
        pass
