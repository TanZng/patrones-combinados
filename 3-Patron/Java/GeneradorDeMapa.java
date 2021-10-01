package buildercomposite;

import CreadoresDeMapa.CreadorMapaJungla;
import CreadoresDeMapa.CreadorMapaLava;
import CreadoresDeMapa.CreadorMapaNieve;

public class GeneradorDeMapa {
    private Mapa mapa;
    private CreadorDeMapa tipo;
    
    public GeneradorDeMapa(Mapa mapa, CreadorDeMapa tipo){
        this.mapa = mapa;
        this.tipo = tipo;
    }
    public GeneradorDeMapa(){}
    
    public Mapa getMapa(){
        return this.mapa;
    }
    public void setMapa(Mapa mapa){
        this.mapa = mapa;
    }
    public CreadorDeMapa getTipo(){
        return this.tipo;
    }
    public void setTipo(CreadorDeMapa tipo){
        this.tipo = tipo;
    }
    public void setTipoMapa(String tipomapa){
        switch (tipomapa) {
            case "nieve":
                this.tipo = new CreadorMapaNieve();
                break;
            case "lava":
                this.tipo = new CreadorMapaLava();
                break;
            case "jungla":
                this.mapa = new CreadorMapaJungla();
                break;
            default:
                break;
        }
    }
    public Mapa generar(){
        if(this.tipo == null)
            return null;
        else
            return tipo.CrearMapa();// Regresa el mapa generado;
    }
    public String verMapa(){
        return this.verMapa();
    }
    
}
