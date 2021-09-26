package masterwholeproxy;

public class Cliente {
    private String nombre;
    private String apellido;
    private int edad;
    private String correo;
    private String contrasena;
    
    public Cliente(String nombre, String apellido, int edad, String correo,String contrasena ){
        this.nombre = nombre;
        this.apellido = apellido;
        this.edad = edad;
        this.correo = correo; 
        this.contrasena = contrasena; 
    }
    public String getNombre(){
        return this.nombre;
    }
  
    public String getApellido(){
        return this.apellido;
    }
    
    public int getEdad(){
        return this.edad;
    }
    
    public String getCorreo(){
       return this.correo;
    }
    public String getContrasena(){
        return this.contrasena;
    }
    public void setNombre(String nombre){
        this.nombre = nombre;
    }
    public void setApellido(String apellido){
        this.apellido = apellido;
    }
    public void setEdad(int edad){
        this.edad = edad; 
    }
    public void setCorreo(String correo){
        this.correo = correo;
    }
    public void setContrasena(String contrasena){
        this.contrasena = contrasena;
    }
    
}
  