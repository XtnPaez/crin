# CRIN – Guía Interna de Desarrollo

## 1. Preparación del entorno

[ ] Crear entorno local con stack PHP + PostgreSQL.
[ ] Definir estructura de carpetas del proyecto (organización MVC básica, aunque sea sin framework).
[ ] Configurar conexión a PostgreSQL y parámetros globales.
[ ] Preparar script base para migraciones SQL (para ir versionando cambios en la DB).

## 2. Diseño de Base de Datos

[ ] Definir modelo entidad–relación (ERD) incluyendo:
- Tablas de identidad y versiones para niveles jerárquicos (Ministerio → Subsecretaría → Dirección General → Dirección/GO → Tipo de Establecimiento).
- Tabla de listados anuales.
- Tabla de documentos oficiales (archivo + texto extraído).
- Vínculos con PADRÓN mediante codificación vigente.
[ ] Incluir campos fecha_inicio y fecha_fin para control de vigencia.
[ ] Crear claves primarias y foráneas para garantizar integridad.
[ ] Definir índices para consultas por año y vigencia.

## 3. Carga de Datos Inicial

[ ] Cargar datos vigentes (año 2024) como punto de partida.
[ ] Validar codificaciones y relaciones con PADRÓN.
[ ] Crear scripts para importar históricos desde Excel/Word:
- Conversión previa a CSV/Texto limpio.
- Validación de formatos antes de insertarlos.

## 4. Funcionalidades Iniciales (MVP)

[ ] Módulo Organigrama
- Alta, modificación y baja lógica (fin de vigencia).
- Consulta por año.
[ ] Módulo Listado Anual
- Alta y modificación de registros.
- Relación con tipo de establecimiento vigente.
[ ] Módulo Documentos
- Carga de archivo original (Word).
- Extracción de texto para búsquedas internas.

## 5. Funciones de Reportes

[ ] Organigrama vigente (exportable a Excel/PDF).
[ ] Listado anual vigente (exportable a Excel/PDF).
[ ] Comparativo vigente vs anterior: altas, bajas, cambios.
[ ] Histórico por año: reconstrucción completa.

## 6. Mantenimiento y Escalabilidad

[ ] Parametrizar año vigente y año de comparación.
[ ] Prever carga progresiva de históricos (últimos 20 años).
[ ] Dejar abierta la estructura a nuevos niveles jerárquicos o categorías.
[ ] Documentar cada cambio de estructura en scripts de migración.

## 7. Entrega y Puesta en Producción

[ ] Migrar base y aplicación al entorno de desarrollo.
[ ] Pruebas de integración con PADRÓN.
[ ] Validar reportes con datos reales.
[ ] Pasaje a producción.
