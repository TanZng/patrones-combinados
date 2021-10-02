package patron4;

public class TexturaSkin {
    private String RutaTextura;

    public TexturaSkin(String rutatextura) {
        this.RutaTextura = rutatextura;
    }

    public String getRutaTextura() {
        return RutaTextura;
    }

    public void setRutaTextura(String RutaTextura) {
        this.RutaTextura = RutaTextura;
    }
    
    
    public void mostrarTextura(){
        System.out.println("<img src = "+ this.RutaTextura + "alt = 'skin'>");
    }
}
