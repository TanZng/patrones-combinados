class Ultimate(object):

    def __init__(self, nombre, danio, nivel):
        self.nombre = nombre
        self.danio = danio
        self.nivel = nivel

    def incNivel(self, incremento):
        self.nivel += incremento
