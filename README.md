# CRIN : CRITERIOS DE INCLUSIÓN

## Documento de Proyecto – Versión Inicial

### 1. Antecedentes

El producto CRITERIOS DE INCLUSIÓN reúne y organiza información vinculada al organigrama educativo y a los listados anuales de tipos de establecimientos. Hasta la fecha, no existe un desarrollo informático específico para este producto: la gestión de datos se ha realizado íntegramente mediante archivos (principalmente Excel y documentos Word), sin un sistema centralizado que garantice trazabilidad, control de versiones, integridad referencial y generación automática de reportes.

La ausencia de un sistema ha generado dificultades para:

- Garantizar la consistencia de la codificación vigente a lo largo de los años.
- Relacionar de forma estructurada la información con otras bases.

### 2. Objetivo General

Diseñar y desarrollar un sistema local en PHP puro con base de datos PostgreSQL, que permita:
- Gestionar y versionar el organigrama educativo.
- Cargar y mantener los listados anuales asociados.
- Incorporar documentación sobre cambios.
- Generar reportes automáticos y exportables (Excel/PDF).
- Asegurar trazabilidad histórica.
- Mantener la codificación vigente utilizada en los listados actuales para identificar los objetos.

### 3. Alcance

El sistema permitirá:
- Administrar el organigrama
  - Versionado de todos los niveles jerárquicos (Ministerio, Subsecretaría, Dirección General, Dirección/GO, Tipo de Establecimiento).
  - Control de vigencia mediante fecha_inicio y fecha_fin.
  - Registro de cambios de nombre, dependencia o creación/eliminación de entidades.
- Gestionar el listado anual
  - Vinculado al tipo de establecimiento vigente en cada año.
  - Registro de datos por nivel/modalidad (Inicial, Primario, Secundario, Superior No Universitario, Otros Servicios, etc.).
  - Mantener codificación vigente para cada objeto.
- Incorporar documentación oficial
  - Carga de documentos Word con descripción de cambios anuales.
  - Almacenamiento del archivo original y del texto extraído para búsquedas rápidas.
- Generar reportes
  - Organigrama vigente.
  - Listado anual vigente.
  - Comparativo vigente vs año anterior.
  - Consulta de históricos por año.
  - Exportación a Excel y PDF.
- Compatibilidad con PADRÓN
  - Diseño de claves y codificaciones que permitan vincular de forma directa con la base de PADRÓN.

### 4. Características Técnicas

- Lenguaje: PHP puro (sin frameworks pesados).
- Base de datos: PostgreSQL (con uso de integridad referencial y versionado).
- Entorno: Inicialmente local, con posterior migración a desarrollo y luego a producción.
- Modelo de datos:
  - Separación de identidad y versiones para cada nivel jerárquico.
  - Control de vigencia en organigrama y listados.
  - Relación entre listados y versiones de tipo de establecimiento.
  - Tabla de documentos con archivo y texto indexable.

### 5. Justificación

- Superar el modelo basado en archivos: dejar atrás la dependencia de hojas de cálculo y documentos dispersos, que dificultan la actualización, el control de cambios y la integración con otros sistemas.
- Trazabilidad histórica: contar con un registro detallado de cómo cambió la estructura y los listados en los últimos 20 años, con posibilidad de reconstruir el estado en cualquier fecha.
- Integración con PADRÓN: facilitar cruces de información mediante codificaciones estandarizadas.
- Automatización de reportes: disminuir el trabajo manual y el riesgo de errores.

### 6. Consideraciones de Implementación

- El sistema se construirá con datos del último año disponible (2024) como punto de partida.
- Posteriormente se cargarán los históricos de los últimos 20 años, respetando las fechas reales de vigencia.
- Los códigos vigentes en los listados actuales se mantendrán como clave oficial en el sistema.
- El diseño de base de datos contemplará la incorporación de nuevos niveles jerárquicos o categorías en el futuro, sin romper la compatibilidad.

### 7. Próximos pasos

- Diseño detallado del modelo entidad-relación (incluyendo organigrama, listados, documentos y vínculos con PADRÓN).
- Creación de base de datos en PostgreSQL y carga inicial del año 2024.
- Desarrollo de interfaz de administración y carga de datos en PHP.
- Incorporación de módulo de reportes y exportaciones.siva de históricos (últimos 20 años).

Migración a entorno de desarrollo y posterior paso a producción.
