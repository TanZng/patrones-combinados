package abstractmasterwhole;

public class GestordeUltimate {
    private Ultimate ultimate;

    public GestordeUltimate(Ultimate ultimate) {
        this.ultimate = ultimate;
    }

    public int subirDeNivel(int incremento){
        return this.ultimate.incNivel(incremento);
    }
    
    public Ultimate generarUltimate(){
        return new Ultimate("basic",10,1);
    }
}
