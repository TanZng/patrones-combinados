package buildercomposite;
public abstract class CreadorDeMapa{
    public IMapa mapa ;
            
    public CreadorDeMapa(IMapa mapa) {
        this.mapa = mapa;
    }
    public IMapa getMapa(){
        return this.mapa;
    }
    public void setMapa(IMapa mapa){
        this.mapa = mapa;
    }
    abstract public Mapa CrearMapa();
}

