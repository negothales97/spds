<?php

use Illuminate\Database\Seeder;

class CitiesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $now = date("Y-m-d H:i:s");
        DB::table("cities")->insert([
            [
                "state_id"   => 11,
                "name"       => "Alta Floresta d`Oeste",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 11,
                "name"       => "Ariquemes",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 11,
                "name"       => "Cabixi",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 11,
                "name"       => "Cacoal",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 11,
                "name"       => "Cerejeiras",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 11,
                "name"       => "Colorado do Oeste",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 11,
                "name"       => "Corumbiara",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 11,
                "name"       => "Costa Marques",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 11,
                "name"       => "Espigão d`Oeste",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 11,
                "name"       => "Guajará-Mirim",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 11,
                "name"       => "Jaru",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 11,
                "name"       => "Ji-Paraná",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 11,
                "name"       => "Machadinho d`Oeste",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 11,
                "name"       => "Nova Brasilândia d`Oeste",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 11,
                "name"       => "Ouro Preto do Oeste",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 11,
                "name"       => "Pimenta Bueno",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 11,
                "name"       => "Porto Velho",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 11,
                "name"       => "Presidente Médici",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 11,
                "name"       => "Rio Crespo",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 11,
                "name"       => "Rolim de Moura",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 11,
                "name"       => "Santa Luzia d`Oeste",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 11,
                "name"       => "Vilhena",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 11,
                "name"       => "São Miguel do Guaporé",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 11,
                "name"       => "Nova Mamoré",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 11,
                "name"       => "Alvorada d`Oeste",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 11,
                "name"       => "Alto Alegre dos Parecis",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 11,
                "name"       => "Alto Paraíso",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 11,
                "name"       => "Buritis",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 11,
                "name"       => "Novo Horizonte do Oeste",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 11,
                "name"       => "Cacaulândia",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 11,
                "name"       => "Campo Novo de Rondônia",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 11,
                "name"       => "Candeias do Jamari",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 11,
                "name"       => "Castanheiras",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 11,
                "name"       => "Chupinguaia",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 11,
                "name"       => "Cujubim",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 11,
                "name"       => "Governador Jorge Teixeira",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 11,
                "name"       => "Itapuã do Oeste",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 11,
                "name"       => "Ministro Andreazza",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 11,
                "name"       => "Mirante da Serra",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 11,
                "name"       => "Monte Negro",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 11,
                "name"       => "Nova União",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 11,
                "name"       => "Parecis",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 11,
                "name"       => "Pimenteiras do Oeste",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 11,
                "name"       => "Primavera de Rondônia",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 11,
                "name"       => "São Felipe d`Oeste",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 11,
                "name"       => "São Francisco do Guaporé",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 11,
                "name"       => "Seringueiras",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 11,
                "name"       => "Teixeirópolis",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 11,
                "name"       => "Theobroma",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 11,
                "name"       => "Urupá",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 11,
                "name"       => "Vale do Anari",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 11,
                "name"       => "Vale do Paraíso",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 12,
                "name"       => "Acrelândia",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 12,
                "name"       => "Assis Brasil",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 12,
                "name"       => "Brasiléia",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 12,
                "name"       => "Bujari",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 12,
                "name"       => "Capixaba",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 12,
                "name"       => "Cruzeiro do Sul",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 12,
                "name"       => "Epitaciolândia",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 12,
                "name"       => "Feijó",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 12,
                "name"       => "Jordão",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 12,
                "name"       => "Mâncio Lima",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 12,
                "name"       => "Manoel Urbano",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 12,
                "name"       => "Marechal Thaumaturgo",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 12,
                "name"       => "Plácido de Castro",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 12,
                "name"       => "Porto Walter",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 12,
                "name"       => "Rio Branco",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 12,
                "name"       => "Rodrigues Alves",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 12,
                "name"       => "Santa Rosa do Purus",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 12,
                "name"       => "Senador Guiomard",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 12,
                "name"       => "Sena Madureira",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 12,
                "name"       => "Tarauacá",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 12,
                "name"       => "Xapuri",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 12,
                "name"       => "Porto Acre",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 13,
                "name"       => "Alvarães",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 13,
                "name"       => "Amaturá",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 13,
                "name"       => "Anamã",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 13,
                "name"       => "Anori",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 13,
                "name"       => "Apuí",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 13,
                "name"       => "Atalaia do Norte",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 13,
                "name"       => "Autazes",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 13,
                "name"       => "Barcelos",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 13,
                "name"       => "Barreirinha",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 13,
                "name"       => "Benjamin Constant",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 13,
                "name"       => "Beruri",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 13,
                "name"       => "Boa Vista do Ramos",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 13,
                "name"       => "Boca do Acre",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 13,
                "name"       => "Borba",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 13,
                "name"       => "Caapiranga",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 13,
                "name"       => "Canutama",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 13,
                "name"       => "Carauari",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 13,
                "name"       => "Careiro",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 13,
                "name"       => "Careiro da Várzea",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 13,
                "name"       => "Coari",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 13,
                "name"       => "Codajás",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 13,
                "name"       => "Eirunepé",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 13,
                "name"       => "Envira",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 13,
                "name"       => "Fonte Boa",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 13,
                "name"       => "Guajará",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 13,
                "name"       => "Humaitá",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 13,
                "name"       => "Ipixuna",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 13,
                "name"       => "Iranduba",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 13,
                "name"       => "Itacoatiara",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 13,
                "name"       => "Itamarati",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 13,
                "name"       => "Itapiranga",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 13,
                "name"       => "Japurá",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 13,
                "name"       => "Juruá",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 13,
                "name"       => "Jutaí",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 13,
                "name"       => "Lábrea",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 13,
                "name"       => "Manacapuru",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 13,
                "name"       => "Manaquiri",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 13,
                "name"       => "Manaus",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 13,
                "name"       => "Manicoré",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 13,
                "name"       => "Maraã",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 13,
                "name"       => "Maués",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 13,
                "name"       => "Nhamundá",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 13,
                "name"       => "Nova Olinda do Norte",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 13,
                "name"       => "Novo Airão",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 13,
                "name"       => "Novo Aripuanã",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 13,
                "name"       => "Parintins",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 13,
                "name"       => "Pauini",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 13,
                "name"       => "Presidente Figueiredo",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 13,
                "name"       => "Rio Preto da Eva",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 13,
                "name"       => "Santa Isabel do Rio Negro",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 13,
                "name"       => "Santo Antônio do Içá",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 13,
                "name"       => "São Gabriel da Cachoeira",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 13,
                "name"       => "São Paulo de Olivença",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 13,
                "name"       => "São Sebastião do Uatumã",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 13,
                "name"       => "Silves",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 13,
                "name"       => "Tabatinga",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 13,
                "name"       => "Tapauá",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 13,
                "name"       => "Tefé",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 13,
                "name"       => "Tonantins",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 13,
                "name"       => "Uarini",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 13,
                "name"       => "Urucará",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 13,
                "name"       => "Urucurituba",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 14,
                "name"       => "Amajari",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 14,
                "name"       => "Alto Alegre",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 14,
                "name"       => "Boa Vista",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 14,
                "name"       => "Bonfim",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 14,
                "name"       => "Cantá",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 14,
                "name"       => "Caracaraí",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 14,
                "name"       => "Caroebe",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 14,
                "name"       => "Iracema",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 14,
                "name"       => "Mucajaí",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 14,
                "name"       => "Normandia",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 14,
                "name"       => "Pacaraima",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 14,
                "name"       => "Rorainópolis",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 14,
                "name"       => "São João da Baliza",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 14,
                "name"       => "São Luiz",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 14,
                "name"       => "Uiramutã",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 15,
                "name"       => "Abaetetuba",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 15,
                "name"       => "Abel Figueiredo",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 15,
                "name"       => "Acará",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 15,
                "name"       => "Afuá",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 15,
                "name"       => "Água Azul do Norte",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 15,
                "name"       => "Alenquer",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 15,
                "name"       => "Almeirim",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 15,
                "name"       => "Altamira",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 15,
                "name"       => "Anajás",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 15,
                "name"       => "Ananindeua",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 15,
                "name"       => "Anapu",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 15,
                "name"       => "Augusto Corrêa",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 15,
                "name"       => "Aurora do Pará",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 15,
                "name"       => "Aveiro",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 15,
                "name"       => "Bagre",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 15,
                "name"       => "Baião",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 15,
                "name"       => "Bannach",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 15,
                "name"       => "Barcarena",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 15,
                "name"       => "Belém",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 15,
                "name"       => "Belterra",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 15,
                "name"       => "Benevides",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 15,
                "name"       => "Bom Jesus do Tocantins",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 15,
                "name"       => "Bonito",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 15,
                "name"       => "Bragança",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 15,
                "name"       => "Brasil Novo",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 15,
                "name"       => "Brejo Grande do Araguaia",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 15,
                "name"       => "Breu Branco",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 15,
                "name"       => "Breves",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 15,
                "name"       => "Bujaru",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 15,
                "name"       => "Cachoeira do Piriá",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 15,
                "name"       => "Cachoeira do Arari",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 15,
                "name"       => "Cametá",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 15,
                "name"       => "Canaã dos Carajás",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 15,
                "name"       => "Capanema",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 15,
                "name"       => "Capitão Poço",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 15,
                "name"       => "Castanhal",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 15,
                "name"       => "Chaves",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 15,
                "name"       => "Colares",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 15,
                "name"       => "Conceição do Araguaia",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 15,
                "name"       => "Concórdia do Pará",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 15,
                "name"       => "Cumaru do Norte",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 15,
                "name"       => "Curionópolis",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 15,
                "name"       => "Curralinho",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 15,
                "name"       => "Curuá",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 15,
                "name"       => "Curuçá",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 15,
                "name"       => "Dom Eliseu",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 15,
                "name"       => "Eldorado dos Carajás",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 15,
                "name"       => "Faro",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 15,
                "name"       => "Floresta do Araguaia",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 15,
                "name"       => "Garrafão do Norte",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 15,
                "name"       => "Goianésia do Pará",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 15,
                "name"       => "Gurupá",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 15,
                "name"       => "Igarapé-Açu",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 15,
                "name"       => "Igarapé-Miri",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 15,
                "name"       => "Inhangapi",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 15,
                "name"       => "Ipixuna do Pará",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 15,
                "name"       => "Irituia",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 15,
                "name"       => "Itaituba",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 15,
                "name"       => "Itupiranga",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 15,
                "name"       => "Jacareacanga",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 15,
                "name"       => "Jacundá",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 15,
                "name"       => "Juruti",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 15,
                "name"       => "Limoeiro do Ajuru",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 15,
                "name"       => "Mãe do Rio",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 15,
                "name"       => "Magalhães Barata",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 15,
                "name"       => "Marabá",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 15,
                "name"       => "Maracanã",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 15,
                "name"       => "Marapanim",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 15,
                "name"       => "Marituba",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 15,
                "name"       => "Medicilândia",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 15,
                "name"       => "Melgaço",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 15,
                "name"       => "Mocajuba",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 15,
                "name"       => "Moju",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 15,
                "name"       => "Mojuí dos Campos",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 15,
                "name"       => "Monte Alegre",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 15,
                "name"       => "Muaná",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 15,
                "name"       => "Nova Esperança do Piriá",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 15,
                "name"       => "Nova Ipixuna",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 15,
                "name"       => "Nova Timboteua",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 15,
                "name"       => "Novo Progresso",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 15,
                "name"       => "Novo Repartimento",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 15,
                "name"       => "Óbidos",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 15,
                "name"       => "Oeiras do Pará",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 15,
                "name"       => "Oriximiná",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 15,
                "name"       => "Ourém",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 15,
                "name"       => "Ourilândia do Norte",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 15,
                "name"       => "Pacajá",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 15,
                "name"       => "Palestina do Pará",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 15,
                "name"       => "Paragominas",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 15,
                "name"       => "Parauapebas",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 15,
                "name"       => "Pau d`Arco",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 15,
                "name"       => "Peixe-Boi",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 15,
                "name"       => "Piçarra",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 15,
                "name"       => "Placas",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 15,
                "name"       => "Ponta de Pedras",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 15,
                "name"       => "Portel",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 15,
                "name"       => "Porto de Moz",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 15,
                "name"       => "Prainha",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 15,
                "name"       => "Primavera",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 15,
                "name"       => "Quatipuru",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 15,
                "name"       => "Redenção",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 15,
                "name"       => "Rio Maria",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 15,
                "name"       => "Rondon do Pará",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 15,
                "name"       => "Rurópolis",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 15,
                "name"       => "Salinópolis",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 15,
                "name"       => "Salvaterra",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 15,
                "name"       => "Santa Bárbara do Pará",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 15,
                "name"       => "Santa Cruz do Arari",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 15,
                "name"       => "Santa Isabel do Pará",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 15,
                "name"       => "Santa Luzia do Pará",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 15,
                "name"       => "Santa Maria das Barreiras",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 15,
                "name"       => "Santa Maria do Pará",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 15,
                "name"       => "Santana do Araguaia",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 15,
                "name"       => "Santarém",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 15,
                "name"       => "Santarém Novo",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 15,
                "name"       => "Santo Antônio do Tauá",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 15,
                "name"       => "São Caetano de Odivelas",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 15,
                "name"       => "São Domingos do Araguaia",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 15,
                "name"       => "São Domingos do Capim",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 15,
                "name"       => "São Félix do Xingu",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 15,
                "name"       => "São Francisco do Pará",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 15,
                "name"       => "São Geraldo do Araguaia",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 15,
                "name"       => "São João da Ponta",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 15,
                "name"       => "São João de Pirabas",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 15,
                "name"       => "São João do Araguaia",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 15,
                "name"       => "São Miguel do Guamá",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 15,
                "name"       => "São Sebastião da Boa Vista",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 15,
                "name"       => "Sapucaia",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 15,
                "name"       => "Senador José Porfírio",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 15,
                "name"       => "Soure",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 15,
                "name"       => "Tailândia",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 15,
                "name"       => "Terra Alta",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 15,
                "name"       => "Terra Santa",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 15,
                "name"       => "Tomé-Açu",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 15,
                "name"       => "Tracuateua",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 15,
                "name"       => "Trairão",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 15,
                "name"       => "Tucumã",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 15,
                "name"       => "Tucuruí",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 15,
                "name"       => "Ulianópolis",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 15,
                "name"       => "Uruará",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 15,
                "name"       => "Vigia",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 15,
                "name"       => "Viseu",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 15,
                "name"       => "Vitória do Xingu",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 15,
                "name"       => "Xinguara",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 16,
                "name"       => "Serra do Navio",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 16,
                "name"       => "Amapá",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 16,
                "name"       => "Pedra Branca do Amaparí",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 16,
                "name"       => "Calçoene",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 16,
                "name"       => "Cutias",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 16,
                "name"       => "Ferreira Gomes",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 16,
                "name"       => "Itaubal",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 16,
                "name"       => "Laranjal do Jari",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 16,
                "name"       => "Macapá",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 16,
                "name"       => "Mazagão",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 16,
                "name"       => "Oiapoque",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 16,
                "name"       => "Porto Grande",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 16,
                "name"       => "Pracuúba",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 16,
                "name"       => "Santana",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 16,
                "name"       => "Tartarugalzinho",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 16,
                "name"       => "Vitória do Jari",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 17,
                "name"       => "Abreulândia",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 17,
                "name"       => "Aguiarnópolis",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 17,
                "name"       => "Aliança do Tocantins",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 17,
                "name"       => "Almas",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 17,
                "name"       => "Alvorada",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 17,
                "name"       => "Ananás",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 17,
                "name"       => "Angico",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 17,
                "name"       => "Aparecida do Rio Negro",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 17,
                "name"       => "Aragominas",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 17,
                "name"       => "Araguacema",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 17,
                "name"       => "Araguaçu",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 17,
                "name"       => "Araguaína",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 17,
                "name"       => "Araguanã",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 17,
                "name"       => "Araguatins",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 17,
                "name"       => "Arapoema",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 17,
                "name"       => "Arraias",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 17,
                "name"       => "Augustinópolis",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 17,
                "name"       => "Aurora do Tocantins",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 17,
                "name"       => "Axixá do Tocantins",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 17,
                "name"       => "Babaçulândia",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 17,
                "name"       => "Bandeirantes do Tocantins",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 17,
                "name"       => "Barra do Ouro",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 17,
                "name"       => "Barrolândia",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 17,
                "name"       => "Bernardo Sayão",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 17,
                "name"       => "Bom Jesus do Tocantins",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 17,
                "name"       => "Brasilândia do Tocantins",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 17,
                "name"       => "Brejinho de Nazaré",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 17,
                "name"       => "Buriti do Tocantins",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 17,
                "name"       => "Cachoeirinha",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 17,
                "name"       => "Campos Lindos",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 17,
                "name"       => "Cariri do Tocantins",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 17,
                "name"       => "Carmolândia",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 17,
                "name"       => "Carrasco Bonito",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 17,
                "name"       => "Caseara",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 17,
                "name"       => "Centenário",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 17,
                "name"       => "Chapada de Areia",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 17,
                "name"       => "Chapada da Natividade",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 17,
                "name"       => "Colinas do Tocantins",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 17,
                "name"       => "Combinado",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 17,
                "name"       => "Conceição do Tocantins",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 17,
                "name"       => "Couto Magalhães",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 17,
                "name"       => "Cristalândia",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 17,
                "name"       => "Crixás do Tocantins",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 17,
                "name"       => "Darcinópolis",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 17,
                "name"       => "Dianópolis",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 17,
                "name"       => "Divinópolis do Tocantins",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 17,
                "name"       => "Dois Irmãos do Tocantins",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 17,
                "name"       => "Dueré",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 17,
                "name"       => "Esperantina",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 17,
                "name"       => "Fátima",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 17,
                "name"       => "Figueirópolis",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 17,
                "name"       => "Filadélfia",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 17,
                "name"       => "Formoso do Araguaia",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 17,
                "name"       => "Fortaleza do Tabocão",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 17,
                "name"       => "Goianorte",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 17,
                "name"       => "Goiatins",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 17,
                "name"       => "Guaraí",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 17,
                "name"       => "Gurupi",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 17,
                "name"       => "Ipueiras",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 17,
                "name"       => "Itacajá",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 17,
                "name"       => "Itaguatins",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 17,
                "name"       => "Itapiratins",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 17,
                "name"       => "Itaporã do Tocantins",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 17,
                "name"       => "Jaú do Tocantins",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 17,
                "name"       => "Juarina",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 17,
                "name"       => "Lagoa da Confusão",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 17,
                "name"       => "Lagoa do Tocantins",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 17,
                "name"       => "Lajeado",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 17,
                "name"       => "Lavandeira",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 17,
                "name"       => "Lizarda",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 17,
                "name"       => "Luzinópolis",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 17,
                "name"       => "Marianópolis do Tocantins",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 17,
                "name"       => "Mateiros",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 17,
                "name"       => "Maurilândia do Tocantins",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 17,
                "name"       => "Miracema do Tocantins",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 17,
                "name"       => "Miranorte",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 17,
                "name"       => "Monte do Carmo",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 17,
                "name"       => "Monte Santo do Tocantins",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 17,
                "name"       => "Palmeiras do Tocantins",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 17,
                "name"       => "Muricilândia",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 17,
                "name"       => "Natividade",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 17,
                "name"       => "Nazaré",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 17,
                "name"       => "Nova Olinda",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 17,
                "name"       => "Nova Rosalândia",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 17,
                "name"       => "Novo Acordo",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 17,
                "name"       => "Novo Alegre",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 17,
                "name"       => "Novo Jardim",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 17,
                "name"       => "Oliveira de Fátima",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 17,
                "name"       => "Palmeirante",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 17,
                "name"       => "Palmeirópolis",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 17,
                "name"       => "Paraíso do Tocantins",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 17,
                "name"       => "Paranã",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 17,
                "name"       => "Pau d`Arco",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 17,
                "name"       => "Pedro Afonso",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 17,
                "name"       => "Peixe",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 17,
                "name"       => "Pequizeiro",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 17,
                "name"       => "Colméia",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 17,
                "name"       => "Pindorama do Tocantins",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 17,
                "name"       => "Piraquê",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 17,
                "name"       => "Pium",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 17,
                "name"       => "Ponte Alta do Bom Jesus",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 17,
                "name"       => "Ponte Alta do Tocantins",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 17,
                "name"       => "Porto Alegre do Tocantins",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 17,
                "name"       => "Porto Nacional",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 17,
                "name"       => "Praia Norte",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 17,
                "name"       => "Presidente Kennedy",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 17,
                "name"       => "Pugmil",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 17,
                "name"       => "Recursolândia",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 17,
                "name"       => "Riachinho",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 17,
                "name"       => "Rio da Conceição",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 17,
                "name"       => "Rio dos Bois",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 17,
                "name"       => "Rio Sono",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 17,
                "name"       => "Sampaio",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 17,
                "name"       => "Sandolândia",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 17,
                "name"       => "Santa Fé do Araguaia",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 17,
                "name"       => "Santa Maria do Tocantins",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 17,
                "name"       => "Santa Rita do Tocantins",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 17,
                "name"       => "Santa Rosa do Tocantins",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 17,
                "name"       => "Santa Tereza do Tocantins",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 17,
                "name"       => "Santa Terezinha do Tocantins",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 17,
                "name"       => "São Bento do Tocantins",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 17,
                "name"       => "São Félix do Tocantins",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 17,
                "name"       => "São Miguel do Tocantins",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 17,
                "name"       => "São Salvador do Tocantins",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 17,
                "name"       => "São Sebastião do Tocantins",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 17,
                "name"       => "São Valério",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 17,
                "name"       => "Silvanópolis",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 17,
                "name"       => "Sítio Novo do Tocantins",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 17,
                "name"       => "Sucupira",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 17,
                "name"       => "Taguatinga",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 17,
                "name"       => "Taipas do Tocantins",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 17,
                "name"       => "Talismã",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 17,
                "name"       => "Palmas",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 17,
                "name"       => "Tocantínia",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 17,
                "name"       => "Tocantinópolis",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 17,
                "name"       => "Tupirama",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 17,
                "name"       => "Tupiratins",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 17,
                "name"       => "Wanderlândia",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 17,
                "name"       => "Xambioá",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 21,
                "name"       => "Açailândia",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 21,
                "name"       => "Afonso Cunha",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 21,
                "name"       => "Água Doce do Maranhão",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 21,
                "name"       => "Alcântara",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 21,
                "name"       => "Aldeias Altas",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 21,
                "name"       => "Altamira do Maranhão",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 21,
                "name"       => "Alto Alegre do Maranhão",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 21,
                "name"       => "Alto Alegre do Pindaré",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 21,
                "name"       => "Alto Parnaíba",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 21,
                "name"       => "Amapá do Maranhão",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 21,
                "name"       => "Amarante do Maranhão",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 21,
                "name"       => "Anajatuba",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 21,
                "name"       => "Anapurus",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 21,
                "name"       => "Apicum-Açu",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 21,
                "name"       => "Araguanã",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 21,
                "name"       => "Araioses",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 21,
                "name"       => "Arame",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 21,
                "name"       => "Arari",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 21,
                "name"       => "Axixá",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 21,
                "name"       => "Bacabal",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 21,
                "name"       => "Bacabeira",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 21,
                "name"       => "Bacuri",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 21,
                "name"       => "Bacurituba",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 21,
                "name"       => "Balsas",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 21,
                "name"       => "Barão de Grajaú",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 21,
                "name"       => "Barra do Corda",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 21,
                "name"       => "Barreirinhas",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 21,
                "name"       => "Belágua",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 21,
                "name"       => "Bela Vista do Maranhão",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 21,
                "name"       => "Benedito Leite",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 21,
                "name"       => "Bequimão",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 21,
                "name"       => "Bernardo do Mearim",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 21,
                "name"       => "Boa Vista do Gurupi",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 21,
                "name"       => "Bom Jardim",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 21,
                "name"       => "Bom Jesus das Selvas",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 21,
                "name"       => "Bom Lugar",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 21,
                "name"       => "Brejo",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 21,
                "name"       => "Brejo de Areia",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 21,
                "name"       => "Buriti",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 21,
                "name"       => "Buriti Bravo",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 21,
                "name"       => "Buriticupu",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 21,
                "name"       => "Buritirana",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 21,
                "name"       => "Cachoeira Grande",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 21,
                "name"       => "Cajapió",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 21,
                "name"       => "Cajari",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 21,
                "name"       => "Campestre do Maranhão",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 21,
                "name"       => "Cândido Mendes",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 21,
                "name"       => "Cantanhede",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 21,
                "name"       => "Capinzal do Norte",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 21,
                "name"       => "Carolina",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 21,
                "name"       => "Carutapera",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 21,
                "name"       => "Caxias",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 21,
                "name"       => "Cedral",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 21,
                "name"       => "Central do Maranhão",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 21,
                "name"       => "Centro do Guilherme",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 21,
                "name"       => "Centro Novo do Maranhão",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 21,
                "name"       => "Chapadinha",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 21,
                "name"       => "Cidelândia",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 21,
                "name"       => "Codó",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 21,
                "name"       => "Coelho Neto",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 21,
                "name"       => "Colinas",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 21,
                "name"       => "Conceição do Lago-Açu",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 21,
                "name"       => "Coroatá",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 21,
                "name"       => "Cururupu",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 21,
                "name"       => "Davinópolis",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 21,
                "name"       => "Dom Pedro",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 21,
                "name"       => "Duque Bacelar",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 21,
                "name"       => "Esperantinópolis",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 21,
                "name"       => "Estreito",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 21,
                "name"       => "Feira Nova do Maranhão",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 21,
                "name"       => "Fernando Falcão",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 21,
                "name"       => "Formosa da Serra Negra",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 21,
                "name"       => "Fortaleza dos Nogueiras",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 21,
                "name"       => "Fortuna",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 21,
                "name"       => "Godofredo Viana",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 21,
                "name"       => "Gonçalves Dias",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 21,
                "name"       => "Governador Archer",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 21,
                "name"       => "Governador Edison Lobão",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 21,
                "name"       => "Governador Eugênio Barros",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 21,
                "name"       => "Governador Luiz Rocha",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 21,
                "name"       => "Governador Newton Bello",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 21,
                "name"       => "Governador Nunes Freire",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 21,
                "name"       => "Graça Aranha",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 21,
                "name"       => "Grajaú",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 21,
                "name"       => "Guimarães",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 21,
                "name"       => "Humberto de Campos",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 21,
                "name"       => "Icatu",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 21,
                "name"       => "Igarapé do Meio",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 21,
                "name"       => "Igarapé Grande",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 21,
                "name"       => "Imperatriz",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 21,
                "name"       => "Itaipava do Grajaú",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 21,
                "name"       => "Itapecuru Mirim",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 21,
                "name"       => "Itinga do Maranhão",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 21,
                "name"       => "Jatobá",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 21,
                "name"       => "Jenipapo dos Vieiras",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 21,
                "name"       => "João Lisboa",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 21,
                "name"       => "Joselândia",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 21,
                "name"       => "Junco do Maranhão",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 21,
                "name"       => "Lago da Pedra",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 21,
                "name"       => "Lago do Junco",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 21,
                "name"       => "Lago Verde",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 21,
                "name"       => "Lagoa do Mato",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 21,
                "name"       => "Lago dos Rodrigues",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 21,
                "name"       => "Lagoa Grande do Maranhão",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 21,
                "name"       => "Lajeado Novo",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 21,
                "name"       => "Lima Campos",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 21,
                "name"       => "Loreto",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 21,
                "name"       => "Luís Domingues",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 21,
                "name"       => "Magalhães de Almeida",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 21,
                "name"       => "Maracaçumé",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 21,
                "name"       => "Marajá do Sena",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 21,
                "name"       => "Maranhãozinho",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 21,
                "name"       => "Mata Roma",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 21,
                "name"       => "Matinha",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 21,
                "name"       => "Matões",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 21,
                "name"       => "Matões do Norte",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 21,
                "name"       => "Milagres do Maranhão",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 21,
                "name"       => "Mirador",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 21,
                "name"       => "Miranda do Norte",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 21,
                "name"       => "Mirinzal",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 21,
                "name"       => "Monção",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 21,
                "name"       => "Montes Altos",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 21,
                "name"       => "Morros",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 21,
                "name"       => "Nina Rodrigues",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 21,
                "name"       => "Nova Colinas",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 21,
                "name"       => "Nova Iorque",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 21,
                "name"       => "Nova Olinda do Maranhão",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 21,
                "name"       => "Olho d`Água das Cunhãs",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 21,
                "name"       => "Olinda Nova do Maranhão",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 21,
                "name"       => "Paço do Lumiar",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 21,
                "name"       => "Palmeirândia",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 21,
                "name"       => "Paraibano",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 21,
                "name"       => "Parnarama",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 21,
                "name"       => "Passagem Franca",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 21,
                "name"       => "Pastos Bons",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 21,
                "name"       => "Paulino Neves",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 21,
                "name"       => "Paulo Ramos",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 21,
                "name"       => "Pedreiras",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 21,
                "name"       => "Pedro do Rosário",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 21,
                "name"       => "Penalva",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 21,
                "name"       => "Peri Mirim",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 21,
                "name"       => "Peritoró",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 21,
                "name"       => "Pindaré-Mirim",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 21,
                "name"       => "Pinheiro",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 21,
                "name"       => "Pio XII",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 21,
                "name"       => "Pirapemas",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 21,
                "name"       => "Poção de Pedras",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 21,
                "name"       => "Porto Franco",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 21,
                "name"       => "Porto Rico do Maranhão",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 21,
                "name"       => "Presidente Dutra",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 21,
                "name"       => "Presidente Juscelino",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 21,
                "name"       => "Presidente Médici",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 21,
                "name"       => "Presidente Sarney",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 21,
                "name"       => "Presidente Vargas",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 21,
                "name"       => "Primeira Cruz",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 21,
                "name"       => "Raposa",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 21,
                "name"       => "Riachão",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 21,
                "name"       => "Ribamar Fiquene",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 21,
                "name"       => "Rosário",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 21,
                "name"       => "Sambaíba",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 21,
                "name"       => "Santa Filomena do Maranhão",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 21,
                "name"       => "Santa Helena",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 21,
                "name"       => "Santa Inês",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 21,
                "name"       => "Santa Luzia",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 21,
                "name"       => "Santa Luzia do Paruá",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 21,
                "name"       => "Santa Quitéria do Maranhão",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 21,
                "name"       => "Santa Rita",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 21,
                "name"       => "Santana do Maranhão",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 21,
                "name"       => "Santo Amaro do Maranhão",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 21,
                "name"       => "Santo Antônio dos Lopes",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 21,
                "name"       => "São Benedito do Rio Preto",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 21,
                "name"       => "São Bento",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 21,
                "name"       => "São Bernardo",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 21,
                "name"       => "São Domingos do Azeitão",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 21,
                "name"       => "São Domingos do Maranhão",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 21,
                "name"       => "São Félix de Balsas",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 21,
                "name"       => "São Francisco do Brejão",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 21,
                "name"       => "São Francisco do Maranhão",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 21,
                "name"       => "São João Batista",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 21,
                "name"       => "São João do Carú",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 21,
                "name"       => "São João do Paraíso",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 21,
                "name"       => "São João do Soter",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 21,
                "name"       => "São João dos Patos",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 21,
                "name"       => "São José de Ribamar",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 21,
                "name"       => "São José dos Basílios",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 21,
                "name"       => "São Luís",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 21,
                "name"       => "São Luís Gonzaga do Maranhão",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 21,
                "name"       => "São Mateus do Maranhão",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 21,
                "name"       => "São Pedro da Água Branca",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 21,
                "name"       => "São Pedro dos Crentes",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 21,
                "name"       => "São Raimundo das Mangabeiras",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 21,
                "name"       => "São Raimundo do Doca Bezerra",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 21,
                "name"       => "São Roberto",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 21,
                "name"       => "São Vicente Ferrer",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 21,
                "name"       => "Satubinha",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 21,
                "name"       => "Senador Alexandre Costa",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 21,
                "name"       => "Senador La Rocque",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 21,
                "name"       => "Serrano do Maranhão",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 21,
                "name"       => "Sítio Novo",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 21,
                "name"       => "Sucupira do Norte",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 21,
                "name"       => "Sucupira do Riachão",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 21,
                "name"       => "Tasso Fragoso",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 21,
                "name"       => "Timbiras",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 21,
                "name"       => "Timon",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 21,
                "name"       => "Trizidela do Vale",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 21,
                "name"       => "Tufilândia",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 21,
                "name"       => "Tuntum",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 21,
                "name"       => "Turiaçu",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 21,
                "name"       => "Turilândia",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 21,
                "name"       => "Tutóia",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 21,
                "name"       => "Urbano Santos",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 21,
                "name"       => "Vargem Grande",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 21,
                "name"       => "Viana",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 21,
                "name"       => "Vila Nova dos Martírios",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 21,
                "name"       => "Vitória do Mearim",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 21,
                "name"       => "Vitorino Freire",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 21,
                "name"       => "Zé Doca",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 22,
                "name"       => "Acauã",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 22,
                "name"       => "Agricolândia",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 22,
                "name"       => "Água Branca",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 22,
                "name"       => "Alagoinha do Piauí",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 22,
                "name"       => "Alegrete do Piauí",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 22,
                "name"       => "Alto Longá",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 22,
                "name"       => "Altos",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 22,
                "name"       => "Alvorada do Gurguéia",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 22,
                "name"       => "Amarante",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 22,
                "name"       => "Angical do Piauí",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 22,
                "name"       => "Anísio de Abreu",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 22,
                "name"       => "Antônio Almeida",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 22,
                "name"       => "Aroazes",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 22,
                "name"       => "Aroeiras do Itaim",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 22,
                "name"       => "Arraial",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 22,
                "name"       => "Assunção do Piauí",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 22,
                "name"       => "Avelino Lopes",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 22,
                "name"       => "Baixa Grande do Ribeiro",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 22,
                "name"       => "Barra d`Alcântara",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 22,
                "name"       => "Barras",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 22,
                "name"       => "Barreiras do Piauí",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 22,
                "name"       => "Barro Duro",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 22,
                "name"       => "Batalha",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 22,
                "name"       => "Bela Vista do Piauí",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 22,
                "name"       => "Belém do Piauí",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 22,
                "name"       => "Beneditinos",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 22,
                "name"       => "Bertolínia",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 22,
                "name"       => "Betânia do Piauí",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 22,
                "name"       => "Boa Hora",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 22,
                "name"       => "Bocaina",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 22,
                "name"       => "Bom Jesus",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 22,
                "name"       => "Bom Princípio do Piauí",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 22,
                "name"       => "Bonfim do Piauí",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 22,
                "name"       => "Boqueirão do Piauí",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 22,
                "name"       => "Brasileira",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 22,
                "name"       => "Brejo do Piauí",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 22,
                "name"       => "Buriti dos Lopes",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 22,
                "name"       => "Buriti dos Montes",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 22,
                "name"       => "Cabeceiras do Piauí",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 22,
                "name"       => "Cajazeiras do Piauí",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 22,
                "name"       => "Cajueiro da Praia",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 22,
                "name"       => "Caldeirão Grande do Piauí",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 22,
                "name"       => "Campinas do Piauí",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 22,
                "name"       => "Campo Alegre do Fidalgo",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 22,
                "name"       => "Campo Grande do Piauí",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 22,
                "name"       => "Campo Largo do Piauí",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 22,
                "name"       => "Campo Maior",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 22,
                "name"       => "Canavieira",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 22,
                "name"       => "Canto do Buriti",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 22,
                "name"       => "Capitão de Campos",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 22,
                "name"       => "Capitão Gervásio Oliveira",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 22,
                "name"       => "Caracol",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 22,
                "name"       => "Caraúbas do Piauí",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 22,
                "name"       => "Caridade do Piauí",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 22,
                "name"       => "Castelo do Piauí",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 22,
                "name"       => "Caxingó",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 22,
                "name"       => "Cocal",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 22,
                "name"       => "Cocal de Telha",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 22,
                "name"       => "Cocal dos Alves",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 22,
                "name"       => "Coivaras",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 22,
                "name"       => "Colônia do Gurguéia",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 22,
                "name"       => "Colônia do Piauí",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 22,
                "name"       => "Conceição do Canindé",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 22,
                "name"       => "Coronel José Dias",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 22,
                "name"       => "Corrente",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 22,
                "name"       => "Cristalândia do Piauí",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 22,
                "name"       => "Cristino Castro",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 22,
                "name"       => "Curimatá",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 22,
                "name"       => "Currais",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 22,
                "name"       => "Curralinhos",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 22,
                "name"       => "Curral Novo do Piauí",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 22,
                "name"       => "Demerval Lobão",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 22,
                "name"       => "Dirceu Arcoverde",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 22,
                "name"       => "Dom Expedito Lopes",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 22,
                "name"       => "Domingos Mourão",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 22,
                "name"       => "Dom Inocêncio",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 22,
                "name"       => "Elesbão Veloso",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 22,
                "name"       => "Eliseu Martins",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 22,
                "name"       => "Esperantina",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 22,
                "name"       => "Fartura do Piauí",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 22,
                "name"       => "Flores do Piauí",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 22,
                "name"       => "Floresta do Piauí",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 22,
                "name"       => "Floriano",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 22,
                "name"       => "Francinópolis",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 22,
                "name"       => "Francisco Ayres",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 22,
                "name"       => "Francisco Macedo",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 22,
                "name"       => "Francisco Santos",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 22,
                "name"       => "Fronteiras",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 22,
                "name"       => "Geminiano",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 22,
                "name"       => "Gilbués",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 22,
                "name"       => "Guadalupe",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 22,
                "name"       => "Guaribas",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 22,
                "name"       => "Hugo Napoleão",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 22,
                "name"       => "Ilha Grande",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 22,
                "name"       => "Inhuma",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 22,
                "name"       => "Ipiranga do Piauí",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 22,
                "name"       => "Isaías Coelho",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 22,
                "name"       => "Itainópolis",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 22,
                "name"       => "Itaueira",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 22,
                "name"       => "Jacobina do Piauí",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 22,
                "name"       => "Jaicós",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 22,
                "name"       => "Jardim do Mulato",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 22,
                "name"       => "Jatobá do Piauí",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 22,
                "name"       => "Jerumenha",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 22,
                "name"       => "João Costa",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 22,
                "name"       => "Joaquim Pires",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 22,
                "name"       => "Joca Marques",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 22,
                "name"       => "José de Freitas",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 22,
                "name"       => "Juazeiro do Piauí",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 22,
                "name"       => "Júlio Borges",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 22,
                "name"       => "Jurema",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 22,
                "name"       => "Lagoinha do Piauí",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 22,
                "name"       => "Lagoa Alegre",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 22,
                "name"       => "Lagoa do Barro do Piauí",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 22,
                "name"       => "Lagoa de São Francisco",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 22,
                "name"       => "Lagoa do Piauí",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 22,
                "name"       => "Lagoa do Sítio",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 22,
                "name"       => "Landri Sales",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 22,
                "name"       => "Luís Correia",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 22,
                "name"       => "Luzilândia",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 22,
                "name"       => "Madeiro",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 22,
                "name"       => "Manoel Emídio",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 22,
                "name"       => "Marcolândia",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 22,
                "name"       => "Marcos Parente",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 22,
                "name"       => "Massapê do Piauí",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 22,
                "name"       => "Matias Olímpio",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 22,
                "name"       => "Miguel Alves",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 22,
                "name"       => "Miguel Leão",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 22,
                "name"       => "Milton Brandão",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 22,
                "name"       => "Monsenhor Gil",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 22,
                "name"       => "Monsenhor Hipólito",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 22,
                "name"       => "Monte Alegre do Piauí",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 22,
                "name"       => "Morro Cabeça no Tempo",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 22,
                "name"       => "Morro do Chapéu do Piauí",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 22,
                "name"       => "Murici dos Portelas",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 22,
                "name"       => "Nazaré do Piauí",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 22,
                "name"       => "Nazária",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 22,
                "name"       => "Nossa Senhora de Nazaré",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 22,
                "name"       => "Nossa Senhora dos Remédios",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 22,
                "name"       => "Novo Oriente do Piauí",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 22,
                "name"       => "Novo Santo Antônio",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 22,
                "name"       => "Oeiras",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 22,
                "name"       => "Olho d`Água do Piauí",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 22,
                "name"       => "Padre Marcos",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 22,
                "name"       => "Paes Landim",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 22,
                "name"       => "Pajeú do Piauí",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 22,
                "name"       => "Palmeira do Piauí",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 22,
                "name"       => "Palmeirais",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 22,
                "name"       => "Paquetá",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 22,
                "name"       => "Parnaguá",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 22,
                "name"       => "Parnaíba",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 22,
                "name"       => "Passagem Franca do Piauí",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 22,
                "name"       => "Patos do Piauí",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 22,
                "name"       => "Pau d`Arco do Piauí",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 22,
                "name"       => "Paulistana",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 22,
                "name"       => "Pavussu",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 22,
                "name"       => "Pedro II",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 22,
                "name"       => "Pedro Laurentino",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 22,
                "name"       => "Nova Santa Rita",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 22,
                "name"       => "Picos",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 22,
                "name"       => "Pimenteiras",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 22,
                "name"       => "Pio IX",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 22,
                "name"       => "Piracuruca",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 22,
                "name"       => "Piripiri",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 22,
                "name"       => "Porto",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 22,
                "name"       => "Porto Alegre do Piauí",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 22,
                "name"       => "Prata do Piauí",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 22,
                "name"       => "Queimada Nova",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 22,
                "name"       => "Redenção do Gurguéia",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 22,
                "name"       => "Regeneração",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 22,
                "name"       => "Riacho Frio",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 22,
                "name"       => "Ribeira do Piauí",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 22,
                "name"       => "Ribeiro Gonçalves",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 22,
                "name"       => "Rio Grande do Piauí",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 22,
                "name"       => "Santa Cruz do Piauí",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 22,
                "name"       => "Santa Cruz dos Milagres",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 22,
                "name"       => "Santa Filomena",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 22,
                "name"       => "Santa Luz",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 22,
                "name"       => "Santana do Piauí",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 22,
                "name"       => "Santa Rosa do Piauí",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 22,
                "name"       => "Santo Antônio de Lisboa",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 22,
                "name"       => "Santo Antônio dos Milagres",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 22,
                "name"       => "Santo Inácio do Piauí",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 22,
                "name"       => "São Braz do Piauí",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 22,
                "name"       => "São Félix do Piauí",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 22,
                "name"       => "São Francisco de Assis do Piauí",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 22,
                "name"       => "São Francisco do Piauí",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 22,
                "name"       => "São Gonçalo do Gurguéia",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 22,
                "name"       => "São Gonçalo do Piauí",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 22,
                "name"       => "São João da Canabrava",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 22,
                "name"       => "São João da Fronteira",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 22,
                "name"       => "São João da Serra",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 22,
                "name"       => "São João da Varjota",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 22,
                "name"       => "São João do Arraial",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 22,
                "name"       => "São João do Piauí",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 22,
                "name"       => "São José do Divino",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 22,
                "name"       => "São José do Peixe",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 22,
                "name"       => "São José do Piauí",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 22,
                "name"       => "São Julião",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 22,
                "name"       => "São Lourenço do Piauí",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 22,
                "name"       => "São Luis do Piauí",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 22,
                "name"       => "São Miguel da Baixa Grande",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 22,
                "name"       => "São Miguel do Fidalgo",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 22,
                "name"       => "São Miguel do Tapuio",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 22,
                "name"       => "São Pedro do Piauí",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 22,
                "name"       => "São Raimundo Nonato",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 22,
                "name"       => "Sebastião Barros",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 22,
                "name"       => "Sebastião Leal",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 22,
                "name"       => "Sigefredo Pacheco",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 22,
                "name"       => "Simões",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 22,
                "name"       => "Simplício Mendes",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 22,
                "name"       => "Socorro do Piauí",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 22,
                "name"       => "Sussuapara",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 22,
                "name"       => "Tamboril do Piauí",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 22,
                "name"       => "Tanque do Piauí",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 22,
                "name"       => "Teresina",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 22,
                "name"       => "União",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 22,
                "name"       => "Uruçuí",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 22,
                "name"       => "Valença do Piauí",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 22,
                "name"       => "Várzea Branca",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 22,
                "name"       => "Várzea Grande",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 22,
                "name"       => "Vera Mendes",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 22,
                "name"       => "Vila Nova do Piauí",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 22,
                "name"       => "Wall Ferraz",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 23,
                "name"       => "Abaiara",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 23,
                "name"       => "Acarape",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 23,
                "name"       => "Acaraú",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 23,
                "name"       => "Acopiara",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 23,
                "name"       => "Aiuaba",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 23,
                "name"       => "Alcântaras",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 23,
                "name"       => "Altaneira",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 23,
                "name"       => "Alto Santo",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 23,
                "name"       => "Amontada",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 23,
                "name"       => "Antonina do Norte",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 23,
                "name"       => "Apuiarés",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 23,
                "name"       => "Aquiraz",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 23,
                "name"       => "Aracati",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 23,
                "name"       => "Aracoiaba",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 23,
                "name"       => "Ararendá",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 23,
                "name"       => "Araripe",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 23,
                "name"       => "Aratuba",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 23,
                "name"       => "Arneiroz",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 23,
                "name"       => "Assaré",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 23,
                "name"       => "Aurora",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 23,
                "name"       => "Baixio",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 23,
                "name"       => "Banabuiú",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 23,
                "name"       => "Barbalha",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 23,
                "name"       => "Barreira",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 23,
                "name"       => "Barro",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 23,
                "name"       => "Barroquinha",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 23,
                "name"       => "Baturité",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 23,
                "name"       => "Beberibe",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 23,
                "name"       => "Bela Cruz",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 23,
                "name"       => "Boa Viagem",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 23,
                "name"       => "Brejo Santo",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 23,
                "name"       => "Camocim",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 23,
                "name"       => "Campos Sales",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 23,
                "name"       => "Canindé",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 23,
                "name"       => "Capistrano",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 23,
                "name"       => "Caridade",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 23,
                "name"       => "Cariré",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 23,
                "name"       => "Caririaçu",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 23,
                "name"       => "Cariús",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 23,
                "name"       => "Carnaubal",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 23,
                "name"       => "Cascavel",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 23,
                "name"       => "Catarina",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 23,
                "name"       => "Catunda",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 23,
                "name"       => "Caucaia",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 23,
                "name"       => "Cedro",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 23,
                "name"       => "Chaval",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 23,
                "name"       => "Choró",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 23,
                "name"       => "Chorozinho",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 23,
                "name"       => "Coreaú",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 23,
                "name"       => "Crateús",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 23,
                "name"       => "Crato",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 23,
                "name"       => "Croatá",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 23,
                "name"       => "Cruz",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 23,
                "name"       => "Deputado Irapuan Pinheiro",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 23,
                "name"       => "Ererê",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 23,
                "name"       => "Eusébio",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 23,
                "name"       => "Farias Brito",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 23,
                "name"       => "Forquilha",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 23,
                "name"       => "Fortaleza",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 23,
                "name"       => "Fortim",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 23,
                "name"       => "Frecheirinha",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 23,
                "name"       => "General Sampaio",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 23,
                "name"       => "Graça",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 23,
                "name"       => "Granja",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 23,
                "name"       => "Granjeiro",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 23,
                "name"       => "Groaíras",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 23,
                "name"       => "Guaiúba",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 23,
                "name"       => "Guaraciaba do Norte",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 23,
                "name"       => "Guaramiranga",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 23,
                "name"       => "Hidrolândia",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 23,
                "name"       => "Horizonte",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 23,
                "name"       => "Ibaretama",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 23,
                "name"       => "Ibiapina",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 23,
                "name"       => "Ibicuitinga",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 23,
                "name"       => "Icapuí",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 23,
                "name"       => "Icó",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 23,
                "name"       => "Iguatu",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 23,
                "name"       => "Independência",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 23,
                "name"       => "Ipaporanga",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 23,
                "name"       => "Ipaumirim",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 23,
                "name"       => "Ipu",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 23,
                "name"       => "Ipueiras",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 23,
                "name"       => "Iracema",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 23,
                "name"       => "Irauçuba",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 23,
                "name"       => "Itaiçaba",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 23,
                "name"       => "Itaitinga",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 23,
                "name"       => "Itapagé",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 23,
                "name"       => "Itapipoca",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 23,
                "name"       => "Itapiúna",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 23,
                "name"       => "Itarema",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 23,
                "name"       => "Itatira",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 23,
                "name"       => "Jaguaretama",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 23,
                "name"       => "Jaguaribara",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 23,
                "name"       => "Jaguaribe",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 23,
                "name"       => "Jaguaruana",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 23,
                "name"       => "Jardim",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 23,
                "name"       => "Jati",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 23,
                "name"       => "Jijoca de Jericoacoara",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 23,
                "name"       => "Juazeiro do Norte",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 23,
                "name"       => "Jucás",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 23,
                "name"       => "Lavras da Mangabeira",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 23,
                "name"       => "Limoeiro do Norte",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 23,
                "name"       => "Madalena",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 23,
                "name"       => "Maracanaú",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 23,
                "name"       => "Maranguape",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 23,
                "name"       => "Marco",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 23,
                "name"       => "Martinópole",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 23,
                "name"       => "Massapê",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 23,
                "name"       => "Mauriti",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 23,
                "name"       => "Meruoca",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 23,
                "name"       => "Milagres",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 23,
                "name"       => "Milhã",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 23,
                "name"       => "Miraíma",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 23,
                "name"       => "Missão Velha",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 23,
                "name"       => "Mombaça",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 23,
                "name"       => "Monsenhor Tabosa",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 23,
                "name"       => "Morada Nova",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 23,
                "name"       => "Moraújo",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 23,
                "name"       => "Morrinhos",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 23,
                "name"       => "Mucambo",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 23,
                "name"       => "Mulungu",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 23,
                "name"       => "Nova Olinda",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 23,
                "name"       => "Nova Russas",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 23,
                "name"       => "Novo Oriente",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 23,
                "name"       => "Ocara",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 23,
                "name"       => "Orós",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 23,
                "name"       => "Pacajus",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 23,
                "name"       => "Pacatuba",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 23,
                "name"       => "Pacoti",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 23,
                "name"       => "Pacujá",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 23,
                "name"       => "Palhano",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 23,
                "name"       => "Palmácia",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 23,
                "name"       => "Paracuru",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 23,
                "name"       => "Paraipaba",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 23,
                "name"       => "Parambu",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 23,
                "name"       => "Paramoti",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 23,
                "name"       => "Pedra Branca",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 23,
                "name"       => "Penaforte",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 23,
                "name"       => "Pentecoste",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 23,
                "name"       => "Pereiro",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 23,
                "name"       => "Pindoretama",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 23,
                "name"       => "Piquet Carneiro",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 23,
                "name"       => "Pires Ferreira",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 23,
                "name"       => "Poranga",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 23,
                "name"       => "Porteiras",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 23,
                "name"       => "Potengi",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 23,
                "name"       => "Potiretama",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 23,
                "name"       => "Quiterianópolis",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 23,
                "name"       => "Quixadá",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 23,
                "name"       => "Quixelô",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 23,
                "name"       => "Quixeramobim",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 23,
                "name"       => "Quixeré",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 23,
                "name"       => "Redenção",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 23,
                "name"       => "Reriutaba",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 23,
                "name"       => "Russas",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 23,
                "name"       => "Saboeiro",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 23,
                "name"       => "Salitre",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 23,
                "name"       => "Santana do Acaraú",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 23,
                "name"       => "Santana do Cariri",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 23,
                "name"       => "Santa Quitéria",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 23,
                "name"       => "São Benedito",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 23,
                "name"       => "São Gonçalo do Amarante",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 23,
                "name"       => "São João do Jaguaribe",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 23,
                "name"       => "São Luís do Curu",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 23,
                "name"       => "Senador Pompeu",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 23,
                "name"       => "Senador Sá",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 23,
                "name"       => "Sobral",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 23,
                "name"       => "Solonópole",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 23,
                "name"       => "Tabuleiro do Norte",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 23,
                "name"       => "Tamboril",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 23,
                "name"       => "Tarrafas",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 23,
                "name"       => "Tauá",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 23,
                "name"       => "Tejuçuoca",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 23,
                "name"       => "Tianguá",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 23,
                "name"       => "Trairi",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 23,
                "name"       => "Tururu",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 23,
                "name"       => "Ubajara",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 23,
                "name"       => "Umari",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 23,
                "name"       => "Umirim",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 23,
                "name"       => "Uruburetama",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 23,
                "name"       => "Uruoca",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 23,
                "name"       => "Varjota",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 23,
                "name"       => "Várzea Alegre",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 23,
                "name"       => "Viçosa do Ceará",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 24,
                "name"       => "Acari",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 24,
                "name"       => "Açu",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 24,
                "name"       => "Afonso Bezerra",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 24,
                "name"       => "Água Nova",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 24,
                "name"       => "Alexandria",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 24,
                "name"       => "Almino Afonso",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 24,
                "name"       => "Alto do Rodrigues",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 24,
                "name"       => "Angicos",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 24,
                "name"       => "Antônio Martins",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 24,
                "name"       => "Apodi",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 24,
                "name"       => "Areia Branca",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 24,
                "name"       => "Arês",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 24,
                "name"       => "Augusto Severo",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 24,
                "name"       => "Baía Formosa",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 24,
                "name"       => "Baraúna",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 24,
                "name"       => "Barcelona",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 24,
                "name"       => "Bento Fernandes",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 24,
                "name"       => "Bodó",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 24,
                "name"       => "Bom Jesus",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 24,
                "name"       => "Brejinho",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 24,
                "name"       => "Caiçara do Norte",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 24,
                "name"       => "Caiçara do Rio do Vento",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 24,
                "name"       => "Caicó",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 24,
                "name"       => "Campo Redondo",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 24,
                "name"       => "Canguaretama",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 24,
                "name"       => "Caraúbas",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 24,
                "name"       => "Carnaúba dos Dantas",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 24,
                "name"       => "Carnaubais",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 24,
                "name"       => "Ceará-Mirim",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 24,
                "name"       => "Cerro Corá",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 24,
                "name"       => "Coronel Ezequiel",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 24,
                "name"       => "Coronel João Pessoa",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 24,
                "name"       => "Cruzeta",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 24,
                "name"       => "Currais Novos",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 24,
                "name"       => "Doutor Severiano",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 24,
                "name"       => "Parnamirim",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 24,
                "name"       => "Encanto",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 24,
                "name"       => "Equador",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 24,
                "name"       => "Espírito Santo",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 24,
                "name"       => "Extremoz",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 24,
                "name"       => "Felipe Guerra",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 24,
                "name"       => "Fernando Pedroza",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 24,
                "name"       => "Florânia",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 24,
                "name"       => "Francisco Dantas",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 24,
                "name"       => "Frutuoso Gomes",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 24,
                "name"       => "Galinhos",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 24,
                "name"       => "Goianinha",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 24,
                "name"       => "Governador Dix-Sept Rosado",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 24,
                "name"       => "Grossos",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 24,
                "name"       => "Guamaré",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 24,
                "name"       => "Ielmo Marinho",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 24,
                "name"       => "Ipanguaçu",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 24,
                "name"       => "Ipueira",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 24,
                "name"       => "Itajá",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 24,
                "name"       => "Itaú",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 24,
                "name"       => "Jaçanã",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 24,
                "name"       => "Jandaíra",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 24,
                "name"       => "Janduís",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 24,
                "name"       => "Januário Cicco",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 24,
                "name"       => "Japi",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 24,
                "name"       => "Jardim de Angicos",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 24,
                "name"       => "Jardim de Piranhas",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 24,
                "name"       => "Jardim do Seridó",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 24,
                "name"       => "João Câmara",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 24,
                "name"       => "João Dias",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 24,
                "name"       => "José da Penha",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 24,
                "name"       => "Jucurutu",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 24,
                "name"       => "Jundiá",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 24,
                "name"       => "Lagoa d`Anta",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 24,
                "name"       => "Lagoa de Pedras",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 24,
                "name"       => "Lagoa de Velhos",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 24,
                "name"       => "Lagoa Nova",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 24,
                "name"       => "Lagoa Salgada",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 24,
                "name"       => "Lajes",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 24,
                "name"       => "Lajes Pintadas",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 24,
                "name"       => "Lucrécia",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 24,
                "name"       => "Luís Gomes",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 24,
                "name"       => "Macaíba",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 24,
                "name"       => "Macau",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 24,
                "name"       => "Major Sales",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 24,
                "name"       => "Marcelino Vieira",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 24,
                "name"       => "Martins",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 24,
                "name"       => "Maxaranguape",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 24,
                "name"       => "Messias Targino",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 24,
                "name"       => "Montanhas",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 24,
                "name"       => "Monte Alegre",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 24,
                "name"       => "Monte das Gameleiras",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 24,
                "name"       => "Mossoró",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 24,
                "name"       => "Natal",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 24,
                "name"       => "Nísia Floresta",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 24,
                "name"       => "Nova Cruz",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 24,
                "name"       => "Olho-d`Água do Borges",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 24,
                "name"       => "Ouro Branco",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 24,
                "name"       => "Paraná",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 24,
                "name"       => "Paraú",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 24,
                "name"       => "Parazinho",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 24,
                "name"       => "Parelhas",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 24,
                "name"       => "Rio do Fogo",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 24,
                "name"       => "Passa e Fica",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 24,
                "name"       => "Passagem",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 24,
                "name"       => "Patu",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 24,
                "name"       => "Santa Maria",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 24,
                "name"       => "Pau dos Ferros",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 24,
                "name"       => "Pedra Grande",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 24,
                "name"       => "Pedra Preta",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 24,
                "name"       => "Pedro Avelino",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 24,
                "name"       => "Pedro Velho",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 24,
                "name"       => "Pendências",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 24,
                "name"       => "Pilões",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 24,
                "name"       => "Poço Branco",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 24,
                "name"       => "Portalegre",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 24,
                "name"       => "Porto do Mangue",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 24,
                "name"       => "Serra Caiada",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 24,
                "name"       => "Pureza",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 24,
                "name"       => "Rafael Fernandes",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 24,
                "name"       => "Rafael Godeiro",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 24,
                "name"       => "Riacho da Cruz",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 24,
                "name"       => "Riacho de Santana",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 24,
                "name"       => "Riachuelo",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 24,
                "name"       => "Rodolfo Fernandes",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 24,
                "name"       => "Tibau",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 24,
                "name"       => "Ruy Barbosa",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 24,
                "name"       => "Santa Cruz",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 24,
                "name"       => "Santana do Matos",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 24,
                "name"       => "Santana do Seridó",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 24,
                "name"       => "Santo Antônio",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 24,
                "name"       => "São Bento do Norte",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 24,
                "name"       => "São Bento do Trairí",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 24,
                "name"       => "São Fernando",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 24,
                "name"       => "São Francisco do Oeste",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 24,
                "name"       => "São Gonçalo do Amarante",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 24,
                "name"       => "São João do Sabugi",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 24,
                "name"       => "São José de Mipibu",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 24,
                "name"       => "São José do Campestre",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 24,
                "name"       => "São José do Seridó",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 24,
                "name"       => "São Miguel",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 24,
                "name"       => "São Miguel do Gostoso",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 24,
                "name"       => "São Paulo do Potengi",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 24,
                "name"       => "São Pedro",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 24,
                "name"       => "São Rafael",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 24,
                "name"       => "São Tomé",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 24,
                "name"       => "São Vicente",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 24,
                "name"       => "Senador Elói de Souza",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 24,
                "name"       => "Senador Georgino Avelino",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 24,
                "name"       => "Serra de São Bento",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 24,
                "name"       => "Serra do Mel",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 24,
                "name"       => "Serra Negra do Norte",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 24,
                "name"       => "Serrinha",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 24,
                "name"       => "Serrinha dos Pintos",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 24,
                "name"       => "Severiano Melo",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 24,
                "name"       => "Sítio Novo",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 24,
                "name"       => "Taboleiro Grande",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 24,
                "name"       => "Taipu",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 24,
                "name"       => "Tangará",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 24,
                "name"       => "Tenente Ananias",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 24,
                "name"       => "Tenente Laurentino Cruz",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 24,
                "name"       => "Tibau do Sul",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 24,
                "name"       => "Timbaúba dos Batistas",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 24,
                "name"       => "Touros",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 24,
                "name"       => "Triunfo Potiguar",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 24,
                "name"       => "Umarizal",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 24,
                "name"       => "Upanema",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 24,
                "name"       => "Várzea",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 24,
                "name"       => "Venha-Ver",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 24,
                "name"       => "Vera Cruz",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 24,
                "name"       => "Viçosa",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 24,
                "name"       => "Vila Flor",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 25,
                "name"       => "Água Branca",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 25,
                "name"       => "Aguiar",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 25,
                "name"       => "Alagoa Grande",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 25,
                "name"       => "Alagoa Nova",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 25,
                "name"       => "Alagoinha",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 25,
                "name"       => "Alcantil",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 25,
                "name"       => "Algodão de Jandaíra",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 25,
                "name"       => "Alhandra",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 25,
                "name"       => "São João do Rio do Peixe",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 25,
                "name"       => "Amparo",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 25,
                "name"       => "Aparecida",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 25,
                "name"       => "Araçagi",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 25,
                "name"       => "Arara",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 25,
                "name"       => "Araruna",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 25,
                "name"       => "Areia",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 25,
                "name"       => "Areia de Baraúnas",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 25,
                "name"       => "Areial",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 25,
                "name"       => "Aroeiras",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 25,
                "name"       => "Assunção",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 25,
                "name"       => "Baía da Traição",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 25,
                "name"       => "Bananeiras",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 25,
                "name"       => "Baraúna",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 25,
                "name"       => "Barra de Santana",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 25,
                "name"       => "Barra de Santa Rosa",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 25,
                "name"       => "Barra de São Miguel",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 25,
                "name"       => "Bayeux",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 25,
                "name"       => "Belém",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 25,
                "name"       => "Belém do Brejo do Cruz",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 25,
                "name"       => "Bernardino Batista",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 25,
                "name"       => "Boa Ventura",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 25,
                "name"       => "Boa Vista",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 25,
                "name"       => "Bom Jesus",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 25,
                "name"       => "Bom Sucesso",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 25,
                "name"       => "Bonito de Santa Fé",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 25,
                "name"       => "Boqueirão",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 25,
                "name"       => "Igaracy",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 25,
                "name"       => "Borborema",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 25,
                "name"       => "Brejo do Cruz",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 25,
                "name"       => "Brejo dos Santos",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 25,
                "name"       => "Caaporã",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 25,
                "name"       => "Cabaceiras",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 25,
                "name"       => "Cabedelo",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 25,
                "name"       => "Cachoeira dos Índios",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 25,
                "name"       => "Cacimba de Areia",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 25,
                "name"       => "Cacimba de Dentro",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 25,
                "name"       => "Cacimbas",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 25,
                "name"       => "Caiçara",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 25,
                "name"       => "Cajazeiras",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 25,
                "name"       => "Cajazeirinhas",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 25,
                "name"       => "Caldas Brandão",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 25,
                "name"       => "Camalaú",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 25,
                "name"       => "Campina Grande",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 25,
                "name"       => "Capim",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 25,
                "name"       => "Caraúbas",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 25,
                "name"       => "Carrapateira",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 25,
                "name"       => "Casserengue",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 25,
                "name"       => "Catingueira",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 25,
                "name"       => "Catolé do Rocha",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 25,
                "name"       => "Caturité",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 25,
                "name"       => "Conceição",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 25,
                "name"       => "Condado",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 25,
                "name"       => "Conde",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 25,
                "name"       => "Congo",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 25,
                "name"       => "Coremas",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 25,
                "name"       => "Coxixola",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 25,
                "name"       => "Cruz do Espírito Santo",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 25,
                "name"       => "Cubati",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 25,
                "name"       => "Cuité",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 25,
                "name"       => "Cuitegi",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 25,
                "name"       => "Cuité de Mamanguape",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 25,
                "name"       => "Curral de Cima",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 25,
                "name"       => "Curral Velho",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 25,
                "name"       => "Damião",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 25,
                "name"       => "Desterro",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 25,
                "name"       => "Vista Serrana",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 25,
                "name"       => "Diamante",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 25,
                "name"       => "Dona Inês",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 25,
                "name"       => "Duas Estradas",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 25,
                "name"       => "Emas",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 25,
                "name"       => "Esperança",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 25,
                "name"       => "Fagundes",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 25,
                "name"       => "Frei Martinho",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 25,
                "name"       => "Gado Bravo",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 25,
                "name"       => "Guarabira",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 25,
                "name"       => "Gurinhém",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 25,
                "name"       => "Gurjão",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 25,
                "name"       => "Ibiara",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 25,
                "name"       => "Imaculada",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 25,
                "name"       => "Ingá",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 25,
                "name"       => "Itabaiana",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 25,
                "name"       => "Itaporanga",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 25,
                "name"       => "Itapororoca",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 25,
                "name"       => "Itatuba",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 25,
                "name"       => "Jacaraú",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 25,
                "name"       => "Jericó",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 25,
                "name"       => "João Pessoa",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 25,
                "name"       => "Juarez Távora",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 25,
                "name"       => "Juazeirinho",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 25,
                "name"       => "Junco do Seridó",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 25,
                "name"       => "Juripiranga",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 25,
                "name"       => "Juru",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 25,
                "name"       => "Lagoa",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 25,
                "name"       => "Lagoa de Dentro",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 25,
                "name"       => "Lagoa Seca",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 25,
                "name"       => "Lastro",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 25,
                "name"       => "Livramento",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 25,
                "name"       => "Logradouro",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 25,
                "name"       => "Lucena",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 25,
                "name"       => "Mãe d`Água",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 25,
                "name"       => "Malta",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 25,
                "name"       => "Mamanguape",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 25,
                "name"       => "Manaíra",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 25,
                "name"       => "Marcação",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 25,
                "name"       => "Mari",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 25,
                "name"       => "Marizópolis",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 25,
                "name"       => "Massaranduba",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 25,
                "name"       => "Mataraca",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 25,
                "name"       => "Matinhas",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 25,
                "name"       => "Mato Grosso",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 25,
                "name"       => "Maturéia",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 25,
                "name"       => "Mogeiro",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 25,
                "name"       => "Montadas",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 25,
                "name"       => "Monte Horebe",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 25,
                "name"       => "Monteiro",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 25,
                "name"       => "Mulungu",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 25,
                "name"       => "Natuba",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 25,
                "name"       => "Nazarezinho",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 25,
                "name"       => "Nova Floresta",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 25,
                "name"       => "Nova Olinda",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 25,
                "name"       => "Nova Palmeira",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 25,
                "name"       => "Olho d`Água",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 25,
                "name"       => "Olivedos",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 25,
                "name"       => "Ouro Velho",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 25,
                "name"       => "Parari",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 25,
                "name"       => "Passagem",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 25,
                "name"       => "Patos",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 25,
                "name"       => "Paulista",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 25,
                "name"       => "Pedra Branca",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 25,
                "name"       => "Pedra Lavrada",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 25,
                "name"       => "Pedras de Fogo",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 25,
                "name"       => "Piancó",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 25,
                "name"       => "Picuí",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 25,
                "name"       => "Pilar",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 25,
                "name"       => "Pilões",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 25,
                "name"       => "Pilõezinhos",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 25,
                "name"       => "Pirpirituba",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 25,
                "name"       => "Pitimbu",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 25,
                "name"       => "Pocinhos",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 25,
                "name"       => "Poço Dantas",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 25,
                "name"       => "Poço de José de Moura",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 25,
                "name"       => "Pombal",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 25,
                "name"       => "Prata",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 25,
                "name"       => "Princesa Isabel",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 25,
                "name"       => "Puxinanã",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 25,
                "name"       => "Queimadas",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 25,
                "name"       => "Quixabá",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 25,
                "name"       => "Remígio",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 25,
                "name"       => "Pedro Régis",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 25,
                "name"       => "Riachão",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 25,
                "name"       => "Riachão do Bacamarte",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 25,
                "name"       => "Riachão do Poço",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 25,
                "name"       => "Riacho de Santo Antônio",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 25,
                "name"       => "Riacho dos Cavalos",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 25,
                "name"       => "Rio Tinto",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 25,
                "name"       => "Salgadinho",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 25,
                "name"       => "Salgado de São Félix",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 25,
                "name"       => "Santa Cecília",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 25,
                "name"       => "Santa Cruz",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 25,
                "name"       => "Santa Helena",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 25,
                "name"       => "Santa Inês",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 25,
                "name"       => "Santa Luzia",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 25,
                "name"       => "Santana de Mangueira",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 25,
                "name"       => "Santana dos Garrotes",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 25,
                "name"       => "Joca Claudino",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 25,
                "name"       => "Santa Rita",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 25,
                "name"       => "Santa Teresinha",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 25,
                "name"       => "Santo André",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 25,
                "name"       => "São Bento",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 25,
                "name"       => "São Bentinho",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 25,
                "name"       => "São Domingos do Cariri",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 25,
                "name"       => "São Domingos",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 25,
                "name"       => "São Francisco",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 25,
                "name"       => "São João do Cariri",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 25,
                "name"       => "São João do Tigre",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 25,
                "name"       => "São José da Lagoa Tapada",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 25,
                "name"       => "São José de Caiana",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 25,
                "name"       => "São José de Espinharas",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 25,
                "name"       => "São José dos Ramos",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 25,
                "name"       => "São José de Piranhas",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 25,
                "name"       => "São José de Princesa",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 25,
                "name"       => "São José do Bonfim",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 25,
                "name"       => "São José do Brejo do Cruz",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 25,
                "name"       => "São José do Sabugi",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 25,
                "name"       => "São José dos Cordeiros",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 25,
                "name"       => "São Mamede",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 25,
                "name"       => "São Miguel de Taipu",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 25,
                "name"       => "São Sebastião de Lagoa de Roça",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 25,
                "name"       => "São Sebastião do Umbuzeiro",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 25,
                "name"       => "Sapé",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 25,
                "name"       => "São Vicente do Seridó",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 25,
                "name"       => "Serra Branca",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 25,
                "name"       => "Serra da Raiz",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 25,
                "name"       => "Serra Grande",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 25,
                "name"       => "Serra Redonda",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 25,
                "name"       => "Serraria",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 25,
                "name"       => "Sertãozinho",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 25,
                "name"       => "Sobrado",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 25,
                "name"       => "Solânea",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 25,
                "name"       => "Soledade",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 25,
                "name"       => "Sossêgo",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 25,
                "name"       => "Sousa",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 25,
                "name"       => "Sumé",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 25,
                "name"       => "Tacima",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 25,
                "name"       => "Taperoá",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 25,
                "name"       => "Tavares",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 25,
                "name"       => "Teixeira",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 25,
                "name"       => "Tenório",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 25,
                "name"       => "Triunfo",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 25,
                "name"       => "Uiraúna",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 25,
                "name"       => "Umbuzeiro",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 25,
                "name"       => "Várzea",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 25,
                "name"       => "Vieirópolis",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 25,
                "name"       => "Zabelê",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 26,
                "name"       => "Abreu e Lima",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 26,
                "name"       => "Afogados da Ingazeira",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 26,
                "name"       => "Afrânio",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 26,
                "name"       => "Agrestina",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 26,
                "name"       => "Água Preta",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 26,
                "name"       => "Águas Belas",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 26,
                "name"       => "Alagoinha",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 26,
                "name"       => "Aliança",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 26,
                "name"       => "Altinho",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 26,
                "name"       => "Amaraji",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 26,
                "name"       => "Angelim",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 26,
                "name"       => "Araçoiaba",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 26,
                "name"       => "Araripina",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 26,
                "name"       => "Arcoverde",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 26,
                "name"       => "Barra de Guabiraba",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 26,
                "name"       => "Barreiros",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 26,
                "name"       => "Belém de Maria",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 26,
                "name"       => "Belém de São Francisco",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 26,
                "name"       => "Belo Jardim",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 26,
                "name"       => "Betânia",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 26,
                "name"       => "Bezerros",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 26,
                "name"       => "Bodocó",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 26,
                "name"       => "Bom Conselho",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 26,
                "name"       => "Bom Jardim",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 26,
                "name"       => "Bonito",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 26,
                "name"       => "Brejão",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 26,
                "name"       => "Brejinho",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 26,
                "name"       => "Brejo da Madre de Deus",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 26,
                "name"       => "Buenos Aires",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 26,
                "name"       => "Buíque",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 26,
                "name"       => "Cabo de Santo Agostinho",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 26,
                "name"       => "Cabrobó",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 26,
                "name"       => "Cachoeirinha",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 26,
                "name"       => "Caetés",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 26,
                "name"       => "Calçado",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 26,
                "name"       => "Calumbi",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 26,
                "name"       => "Camaragibe",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 26,
                "name"       => "Camocim de São Félix",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 26,
                "name"       => "Camutanga",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 26,
                "name"       => "Canhotinho",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 26,
                "name"       => "Capoeiras",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 26,
                "name"       => "Carnaíba",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 26,
                "name"       => "Carnaubeira da Penha",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 26,
                "name"       => "Carpina",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 26,
                "name"       => "Caruaru",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 26,
                "name"       => "Casinhas",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 26,
                "name"       => "Catende",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 26,
                "name"       => "Cedro",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 26,
                "name"       => "Chã de Alegria",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 26,
                "name"       => "Chã Grande",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 26,
                "name"       => "Condado",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 26,
                "name"       => "Correntes",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 26,
                "name"       => "Cortês",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 26,
                "name"       => "Cumaru",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 26,
                "name"       => "Cupira",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 26,
                "name"       => "Custódia",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 26,
                "name"       => "Dormentes",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 26,
                "name"       => "Escada",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 26,
                "name"       => "Exu",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 26,
                "name"       => "Feira Nova",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 26,
                "name"       => "Fernando de Noronha",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 26,
                "name"       => "Ferreiros",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 26,
                "name"       => "Flores",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 26,
                "name"       => "Floresta",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 26,
                "name"       => "Frei Miguelinho",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 26,
                "name"       => "Gameleira",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 26,
                "name"       => "Garanhuns",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 26,
                "name"       => "Glória do Goitá",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 26,
                "name"       => "Goiana",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 26,
                "name"       => "Granito",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 26,
                "name"       => "Gravatá",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 26,
                "name"       => "Iati",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 26,
                "name"       => "Ibimirim",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 26,
                "name"       => "Ibirajuba",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 26,
                "name"       => "Igarassu",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 26,
                "name"       => "Iguaraci",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 26,
                "name"       => "Inajá",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 26,
                "name"       => "Ingazeira",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 26,
                "name"       => "Ipojuca",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 26,
                "name"       => "Ipubi",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 26,
                "name"       => "Itacuruba",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 26,
                "name"       => "Itaíba",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 26,
                "name"       => "Ilha de Itamaracá",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 26,
                "name"       => "Itambé",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 26,
                "name"       => "Itapetim",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 26,
                "name"       => "Itapissuma",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 26,
                "name"       => "Itaquitinga",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 26,
                "name"       => "Jaboatão dos Guararapes",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 26,
                "name"       => "Jaqueira",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 26,
                "name"       => "Jataúba",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 26,
                "name"       => "Jatobá",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 26,
                "name"       => "João Alfredo",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 26,
                "name"       => "Joaquim Nabuco",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 26,
                "name"       => "Jucati",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 26,
                "name"       => "Jupi",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 26,
                "name"       => "Jurema",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 26,
                "name"       => "Lagoa do Carro",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 26,
                "name"       => "Lagoa do Itaenga",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 26,
                "name"       => "Lagoa do Ouro",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 26,
                "name"       => "Lagoa dos Gatos",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 26,
                "name"       => "Lagoa Grande",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 26,
                "name"       => "Lajedo",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 26,
                "name"       => "Limoeiro",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 26,
                "name"       => "Macaparana",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 26,
                "name"       => "Machados",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 26,
                "name"       => "Manari",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 26,
                "name"       => "Maraial",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 26,
                "name"       => "Mirandiba",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 26,
                "name"       => "Moreno",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 26,
                "name"       => "Nazaré da Mata",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 26,
                "name"       => "Olinda",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 26,
                "name"       => "Orobó",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 26,
                "name"       => "Orocó",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 26,
                "name"       => "Ouricuri",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 26,
                "name"       => "Palmares",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 26,
                "name"       => "Palmeirina",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 26,
                "name"       => "Panelas",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 26,
                "name"       => "Paranatama",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 26,
                "name"       => "Parnamirim",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 26,
                "name"       => "Passira",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 26,
                "name"       => "Paudalho",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 26,
                "name"       => "Paulista",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 26,
                "name"       => "Pedra",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 26,
                "name"       => "Pesqueira",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 26,
                "name"       => "Petrolândia",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 26,
                "name"       => "Petrolina",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 26,
                "name"       => "Poção",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 26,
                "name"       => "Pombos",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 26,
                "name"       => "Primavera",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 26,
                "name"       => "Quipapá",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 26,
                "name"       => "Quixaba",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 26,
                "name"       => "Recife",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 26,
                "name"       => "Riacho das Almas",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 26,
                "name"       => "Ribeirão",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 26,
                "name"       => "Rio Formoso",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 26,
                "name"       => "Sairé",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 26,
                "name"       => "Salgadinho",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 26,
                "name"       => "Salgueiro",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 26,
                "name"       => "Saloá",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 26,
                "name"       => "Sanharó",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 26,
                "name"       => "Santa Cruz",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 26,
                "name"       => "Santa Cruz da Baixa Verde",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 26,
                "name"       => "Santa Cruz do Capibaribe",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 26,
                "name"       => "Santa Filomena",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 26,
                "name"       => "Santa Maria da Boa Vista",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 26,
                "name"       => "Santa Maria do Cambucá",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 26,
                "name"       => "Santa Terezinha",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 26,
                "name"       => "São Benedito do Sul",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 26,
                "name"       => "São Bento do Una",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 26,
                "name"       => "São Caitano",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 26,
                "name"       => "São João",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 26,
                "name"       => "São Joaquim do Monte",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 26,
                "name"       => "São José da Coroa Grande",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 26,
                "name"       => "São José do Belmonte",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 26,
                "name"       => "São José do Egito",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 26,
                "name"       => "São Lourenço da Mata",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 26,
                "name"       => "São Vicente Ferrer",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 26,
                "name"       => "Serra Talhada",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 26,
                "name"       => "Serrita",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 26,
                "name"       => "Sertânia",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 26,
                "name"       => "Sirinhaém",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 26,
                "name"       => "Moreilândia",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 26,
                "name"       => "Solidão",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 26,
                "name"       => "Surubim",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 26,
                "name"       => "Tabira",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 26,
                "name"       => "Tacaimbó",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 26,
                "name"       => "Tacaratu",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 26,
                "name"       => "Tamandaré",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 26,
                "name"       => "Taquaritinga do Norte",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 26,
                "name"       => "Terezinha",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 26,
                "name"       => "Terra Nova",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 26,
                "name"       => "Timbaúba",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 26,
                "name"       => "Toritama",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 26,
                "name"       => "Tracunhaém",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 26,
                "name"       => "Trindade",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 26,
                "name"       => "Triunfo",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 26,
                "name"       => "Tupanatinga",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 26,
                "name"       => "Tuparetama",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 26,
                "name"       => "Venturosa",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 26,
                "name"       => "Verdejante",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 26,
                "name"       => "Vertente do Lério",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 26,
                "name"       => "Vertentes",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 26,
                "name"       => "Vicência",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 26,
                "name"       => "Vitória de Santo Antão",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 26,
                "name"       => "Xexéu",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 27,
                "name"       => "Água Branca",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 27,
                "name"       => "Anadia",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 27,
                "name"       => "Arapiraca",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 27,
                "name"       => "Atalaia",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 27,
                "name"       => "Barra de Santo Antônio",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 27,
                "name"       => "Barra de São Miguel",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 27,
                "name"       => "Batalha",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 27,
                "name"       => "Belém",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 27,
                "name"       => "Belo Monte",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 27,
                "name"       => "Boca da Mata",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 27,
                "name"       => "Branquinha",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 27,
                "name"       => "Cacimbinhas",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 27,
                "name"       => "Cajueiro",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 27,
                "name"       => "Campestre",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 27,
                "name"       => "Campo Alegre",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 27,
                "name"       => "Campo Grande",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 27,
                "name"       => "Canapi",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 27,
                "name"       => "Capela",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 27,
                "name"       => "Carneiros",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 27,
                "name"       => "Chã Preta",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 27,
                "name"       => "Coité do Nóia",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 27,
                "name"       => "Colônia Leopoldina",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 27,
                "name"       => "Coqueiro Seco",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 27,
                "name"       => "Coruripe",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 27,
                "name"       => "Craíbas",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 27,
                "name"       => "Delmiro Gouveia",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 27,
                "name"       => "Dois Riachos",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 27,
                "name"       => "Estrela de Alagoas",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 27,
                "name"       => "Feira Grande",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 27,
                "name"       => "Feliz Deserto",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 27,
                "name"       => "Flexeiras",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 27,
                "name"       => "Girau do Ponciano",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 27,
                "name"       => "Ibateguara",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 27,
                "name"       => "Igaci",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 27,
                "name"       => "Igreja Nova",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 27,
                "name"       => "Inhapi",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 27,
                "name"       => "Jacaré dos Homens",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 27,
                "name"       => "Jacuípe",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 27,
                "name"       => "Japaratinga",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 27,
                "name"       => "Jaramataia",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 27,
                "name"       => "Jequiá da Praia",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 27,
                "name"       => "Joaquim Gomes",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 27,
                "name"       => "Jundiá",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 27,
                "name"       => "Junqueiro",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 27,
                "name"       => "Lagoa da Canoa",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 27,
                "name"       => "Limoeiro de Anadia",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 27,
                "name"       => "Maceió",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 27,
                "name"       => "Major Isidoro",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 27,
                "name"       => "Maragogi",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 27,
                "name"       => "Maravilha",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 27,
                "name"       => "Marechal Deodoro",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 27,
                "name"       => "Maribondo",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 27,
                "name"       => "Mar Vermelho",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 27,
                "name"       => "Mata Grande",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 27,
                "name"       => "Matriz de Camaragibe",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 27,
                "name"       => "Messias",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 27,
                "name"       => "Minador do Negrão",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 27,
                "name"       => "Monteirópolis",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 27,
                "name"       => "Murici",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 27,
                "name"       => "Novo Lino",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 27,
                "name"       => "Olho d`Água das Flores",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 27,
                "name"       => "Olho d`Água do Casado",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 27,
                "name"       => "Olho d`Água Grande",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 27,
                "name"       => "Olivença",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 27,
                "name"       => "Ouro Branco",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 27,
                "name"       => "Palestina",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 27,
                "name"       => "Palmeira dos Índios",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 27,
                "name"       => "Pão de Açúcar",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 27,
                "name"       => "Pariconha",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 27,
                "name"       => "Paripueira",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 27,
                "name"       => "Passo de Camaragibe",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 27,
                "name"       => "Paulo Jacinto",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 27,
                "name"       => "Penedo",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 27,
                "name"       => "Piaçabuçu",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 27,
                "name"       => "Pilar",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 27,
                "name"       => "Pindoba",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 27,
                "name"       => "Piranhas",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 27,
                "name"       => "Poço das Trincheiras",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 27,
                "name"       => "Porto Calvo",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 27,
                "name"       => "Porto de Pedras",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 27,
                "name"       => "Porto Real do Colégio",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 27,
                "name"       => "Quebrangulo",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 27,
                "name"       => "Rio Largo",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 27,
                "name"       => "Roteiro",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 27,
                "name"       => "Santa Luzia do Norte",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 27,
                "name"       => "Santana do Ipanema",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 27,
                "name"       => "Santana do Mundaú",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 27,
                "name"       => "São Brás",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 27,
                "name"       => "São José da Laje",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 27,
                "name"       => "São José da Tapera",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 27,
                "name"       => "São Luís do Quitunde",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 27,
                "name"       => "São Miguel dos Campos",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 27,
                "name"       => "São Miguel dos Milagres",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 27,
                "name"       => "São Sebastião",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 27,
                "name"       => "Satuba",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 27,
                "name"       => "Senador Rui Palmeira",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 27,
                "name"       => "Tanque d`Arca",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 27,
                "name"       => "Taquarana",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 27,
                "name"       => "Teotônio Vilela",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 27,
                "name"       => "Traipu",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 27,
                "name"       => "União dos Palmares",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 27,
                "name"       => "Viçosa",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 28,
                "name"       => "Amparo de São Francisco",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 28,
                "name"       => "Aquidabã",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 28,
                "name"       => "Aracaju",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 28,
                "name"       => "Arauá",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 28,
                "name"       => "Areia Branca",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 28,
                "name"       => "Barra dos Coqueiros",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 28,
                "name"       => "Boquim",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 28,
                "name"       => "Brejo Grande",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 28,
                "name"       => "Campo do Brito",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 28,
                "name"       => "Canhoba",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 28,
                "name"       => "Canindé de São Francisco",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 28,
                "name"       => "Capela",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 28,
                "name"       => "Carira",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 28,
                "name"       => "Carmópolis",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 28,
                "name"       => "Cedro de São João",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 28,
                "name"       => "Cristinápolis",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 28,
                "name"       => "Cumbe",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 28,
                "name"       => "Divina Pastora",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 28,
                "name"       => "Estância",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 28,
                "name"       => "Feira Nova",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 28,
                "name"       => "Frei Paulo",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 28,
                "name"       => "Gararu",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 28,
                "name"       => "General Maynard",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 28,
                "name"       => "Gracho Cardoso",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 28,
                "name"       => "Ilha das Flores",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 28,
                "name"       => "Indiaroba",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 28,
                "name"       => "Itabaiana",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 28,
                "name"       => "Itabaianinha",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 28,
                "name"       => "Itabi",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 28,
                "name"       => "Itaporanga d`Ajuda",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 28,
                "name"       => "Japaratuba",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 28,
                "name"       => "Japoatã",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 28,
                "name"       => "Lagarto",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 28,
                "name"       => "Laranjeiras",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 28,
                "name"       => "Macambira",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 28,
                "name"       => "Malhada dos Bois",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 28,
                "name"       => "Malhador",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 28,
                "name"       => "Maruim",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 28,
                "name"       => "Moita Bonita",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 28,
                "name"       => "Monte Alegre de Sergipe",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 28,
                "name"       => "Muribeca",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 28,
                "name"       => "Neópolis",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 28,
                "name"       => "Nossa Senhora Aparecida",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 28,
                "name"       => "Nossa Senhora da Glória",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 28,
                "name"       => "Nossa Senhora das Dores",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 28,
                "name"       => "Nossa Senhora de Lourdes",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 28,
                "name"       => "Nossa Senhora do Socorro",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 28,
                "name"       => "Pacatuba",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 28,
                "name"       => "Pedra Mole",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 28,
                "name"       => "Pedrinhas",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 28,
                "name"       => "Pinhão",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 28,
                "name"       => "Pirambu",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 28,
                "name"       => "Poço Redondo",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 28,
                "name"       => "Poço Verde",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 28,
                "name"       => "Porto da Folha",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 28,
                "name"       => "Propriá",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 28,
                "name"       => "Riachão do Dantas",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 28,
                "name"       => "Riachuelo",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 28,
                "name"       => "Ribeirópolis",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 28,
                "name"       => "Rosário do Catete",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 28,
                "name"       => "Salgado",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 28,
                "name"       => "Santa Luzia do Itanhy",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 28,
                "name"       => "Santana do São Francisco",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 28,
                "name"       => "Santa Rosa de Lima",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 28,
                "name"       => "Santo Amaro das Brotas",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 28,
                "name"       => "São Cristóvão",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 28,
                "name"       => "São Domingos",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 28,
                "name"       => "São Francisco",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 28,
                "name"       => "São Miguel do Aleixo",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 28,
                "name"       => "Simão Dias",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 28,
                "name"       => "Siriri",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 28,
                "name"       => "Telha",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 28,
                "name"       => "Tobias Barreto",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 28,
                "name"       => "Tomar do Geru",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 28,
                "name"       => "Umbaúba",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 29,
                "name"       => "Abaíra",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 29,
                "name"       => "Abaré",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 29,
                "name"       => "Acajutiba",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 29,
                "name"       => "Adustina",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 29,
                "name"       => "Água Fria",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 29,
                "name"       => "Érico Cardoso",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 29,
                "name"       => "Aiquara",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 29,
                "name"       => "Alagoinhas",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 29,
                "name"       => "Alcobaça",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 29,
                "name"       => "Almadina",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 29,
                "name"       => "Amargosa",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 29,
                "name"       => "Amélia Rodrigues",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 29,
                "name"       => "América Dourada",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 29,
                "name"       => "Anagé",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 29,
                "name"       => "Andaraí",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 29,
                "name"       => "Andorinha",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 29,
                "name"       => "Angical",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 29,
                "name"       => "Anguera",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 29,
                "name"       => "Antas",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 29,
                "name"       => "Antônio Cardoso",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 29,
                "name"       => "Antônio Gonçalves",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 29,
                "name"       => "Aporá",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 29,
                "name"       => "Apuarema",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 29,
                "name"       => "Aracatu",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 29,
                "name"       => "Araças",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 29,
                "name"       => "Araci",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 29,
                "name"       => "Aramari",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 29,
                "name"       => "Arataca",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 29,
                "name"       => "Aratuípe",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 29,
                "name"       => "Aurelino Leal",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 29,
                "name"       => "Baianópolis",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 29,
                "name"       => "Baixa Grande",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 29,
                "name"       => "Banzaê",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 29,
                "name"       => "Barra",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 29,
                "name"       => "Barra da Estiva",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 29,
                "name"       => "Barra do Choça",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 29,
                "name"       => "Barra do Mendes",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 29,
                "name"       => "Barra do Rocha",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 29,
                "name"       => "Barreiras",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 29,
                "name"       => "Barro Alto",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 29,
                "name"       => "Barrocas",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 29,
                "name"       => "Barro Preto",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 29,
                "name"       => "Belmonte",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 29,
                "name"       => "Belo Campo",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 29,
                "name"       => "Biritinga",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 29,
                "name"       => "Boa Nova",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 29,
                "name"       => "Boa Vista do Tupim",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 29,
                "name"       => "Bom Jesus da Lapa",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 29,
                "name"       => "Bom Jesus da Serra",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 29,
                "name"       => "Boninal",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 29,
                "name"       => "Bonito",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 29,
                "name"       => "Boquira",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 29,
                "name"       => "Botuporã",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 29,
                "name"       => "Brejões",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 29,
                "name"       => "Brejolândia",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 29,
                "name"       => "Brotas de Macaúbas",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 29,
                "name"       => "Brumado",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 29,
                "name"       => "Buerarema",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 29,
                "name"       => "Buritirama",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 29,
                "name"       => "Caatiba",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 29,
                "name"       => "Cabaceiras do Paraguaçu",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 29,
                "name"       => "Cachoeira",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 29,
                "name"       => "Caculé",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 29,
                "name"       => "Caém",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 29,
                "name"       => "Caetanos",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 29,
                "name"       => "Caetité",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 29,
                "name"       => "Cafarnaum",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 29,
                "name"       => "Cairu",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 29,
                "name"       => "Caldeirão Grande",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 29,
                "name"       => "Camacan",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 29,
                "name"       => "Camaçari",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 29,
                "name"       => "Camamu",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 29,
                "name"       => "Campo Alegre de Lourdes",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 29,
                "name"       => "Campo Formoso",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 29,
                "name"       => "Canápolis",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 29,
                "name"       => "Canarana",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 29,
                "name"       => "Canavieiras",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 29,
                "name"       => "Candeal",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 29,
                "name"       => "Candeias",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 29,
                "name"       => "Candiba",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 29,
                "name"       => "Cândido Sales",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 29,
                "name"       => "Cansanção",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 29,
                "name"       => "Canudos",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 29,
                "name"       => "Capela do Alto Alegre",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 29,
                "name"       => "Capim Grosso",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 29,
                "name"       => "Caraíbas",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 29,
                "name"       => "Caravelas",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 29,
                "name"       => "Cardeal da Silva",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 29,
                "name"       => "Carinhanha",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 29,
                "name"       => "Casa Nova",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 29,
                "name"       => "Castro Alves",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 29,
                "name"       => "Catolândia",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 29,
                "name"       => "Catu",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 29,
                "name"       => "Caturama",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 29,
                "name"       => "Central",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 29,
                "name"       => "Chorrochó",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 29,
                "name"       => "Cícero Dantas",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 29,
                "name"       => "Cipó",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 29,
                "name"       => "Coaraci",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 29,
                "name"       => "Cocos",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 29,
                "name"       => "Conceição da Feira",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 29,
                "name"       => "Conceição do Almeida",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 29,
                "name"       => "Conceição do Coité",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 29,
                "name"       => "Conceição do Jacuípe",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 29,
                "name"       => "Conde",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 29,
                "name"       => "Condeúba",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 29,
                "name"       => "Contendas do Sincorá",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 29,
                "name"       => "Coração de Maria",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 29,
                "name"       => "Cordeiros",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 29,
                "name"       => "Coribe",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 29,
                "name"       => "Coronel João Sá",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 29,
                "name"       => "Correntina",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 29,
                "name"       => "Cotegipe",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 29,
                "name"       => "Cravolândia",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 29,
                "name"       => "Crisópolis",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 29,
                "name"       => "Cristópolis",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 29,
                "name"       => "Cruz das Almas",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 29,
                "name"       => "Curaçá",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 29,
                "name"       => "Dário Meira",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 29,
                "name"       => "Dias d`Ávila",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 29,
                "name"       => "Dom Basílio",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 29,
                "name"       => "Dom Macedo Costa",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 29,
                "name"       => "Elísio Medrado",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 29,
                "name"       => "Encruzilhada",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 29,
                "name"       => "Entre Rios",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 29,
                "name"       => "Esplanada",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 29,
                "name"       => "Euclides da Cunha",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 29,
                "name"       => "Eunápolis",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 29,
                "name"       => "Fátima",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 29,
                "name"       => "Feira da Mata",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 29,
                "name"       => "Feira de Santana",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 29,
                "name"       => "Filadélfia",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 29,
                "name"       => "Firmino Alves",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 29,
                "name"       => "Floresta Azul",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 29,
                "name"       => "Formosa do Rio Preto",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 29,
                "name"       => "Gandu",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 29,
                "name"       => "Gavião",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 29,
                "name"       => "Gentio do Ouro",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 29,
                "name"       => "Glória",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 29,
                "name"       => "Gongogi",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 29,
                "name"       => "Governador Mangabeira",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 29,
                "name"       => "Guajeru",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 29,
                "name"       => "Guanambi",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 29,
                "name"       => "Guaratinga",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 29,
                "name"       => "Heliópolis",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 29,
                "name"       => "Iaçu",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 29,
                "name"       => "Ibiassucê",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 29,
                "name"       => "Ibicaraí",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 29,
                "name"       => "Ibicoara",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 29,
                "name"       => "Ibicuí",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 29,
                "name"       => "Ibipeba",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 29,
                "name"       => "Ibipitanga",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 29,
                "name"       => "Ibiquera",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 29,
                "name"       => "Ibirapitanga",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 29,
                "name"       => "Ibirapuã",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 29,
                "name"       => "Ibirataia",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 29,
                "name"       => "Ibitiara",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 29,
                "name"       => "Ibititá",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 29,
                "name"       => "Ibotirama",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 29,
                "name"       => "Ichu",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 29,
                "name"       => "Igaporã",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 29,
                "name"       => "Igrapiúna",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 29,
                "name"       => "Iguaí",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 29,
                "name"       => "Ilhéus",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 29,
                "name"       => "Inhambupe",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 29,
                "name"       => "Ipecaetá",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 29,
                "name"       => "Ipiaú",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 29,
                "name"       => "Ipirá",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 29,
                "name"       => "Ipupiara",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 29,
                "name"       => "Irajuba",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 29,
                "name"       => "Iramaia",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 29,
                "name"       => "Iraquara",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 29,
                "name"       => "Irará",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 29,
                "name"       => "Irecê",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 29,
                "name"       => "Itabela",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 29,
                "name"       => "Itaberaba",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 29,
                "name"       => "Itabuna",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 29,
                "name"       => "Itacaré",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 29,
                "name"       => "Itaeté",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 29,
                "name"       => "Itagi",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 29,
                "name"       => "Itagibá",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 29,
                "name"       => "Itagimirim",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 29,
                "name"       => "Itaguaçu da Bahia",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 29,
                "name"       => "Itaju do Colônia",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 29,
                "name"       => "Itajuípe",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 29,
                "name"       => "Itamaraju",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 29,
                "name"       => "Itamari",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 29,
                "name"       => "Itambé",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 29,
                "name"       => "Itanagra",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 29,
                "name"       => "Itanhém",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 29,
                "name"       => "Itaparica",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 29,
                "name"       => "Itapé",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 29,
                "name"       => "Itapebi",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 29,
                "name"       => "Itapetinga",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 29,
                "name"       => "Itapicuru",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 29,
                "name"       => "Itapitanga",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 29,
                "name"       => "Itaquara",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 29,
                "name"       => "Itarantim",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 29,
                "name"       => "Itatim",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 29,
                "name"       => "Itiruçu",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 29,
                "name"       => "Itiúba",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 29,
                "name"       => "Itororó",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 29,
                "name"       => "Ituaçu",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 29,
                "name"       => "Ituberá",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 29,
                "name"       => "Iuiú",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 29,
                "name"       => "Jaborandi",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 29,
                "name"       => "Jacaraci",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 29,
                "name"       => "Jacobina",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 29,
                "name"       => "Jaguaquara",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 29,
                "name"       => "Jaguarari",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 29,
                "name"       => "Jaguaripe",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 29,
                "name"       => "Jandaíra",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 29,
                "name"       => "Jequié",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 29,
                "name"       => "Jeremoabo",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 29,
                "name"       => "Jiquiriçá",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 29,
                "name"       => "Jitaúna",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 29,
                "name"       => "João Dourado",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 29,
                "name"       => "Juazeiro",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 29,
                "name"       => "Jucuruçu",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 29,
                "name"       => "Jussara",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 29,
                "name"       => "Jussari",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 29,
                "name"       => "Jussiape",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 29,
                "name"       => "Lafaiete Coutinho",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 29,
                "name"       => "Lagoa Real",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 29,
                "name"       => "Laje",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 29,
                "name"       => "Lajedão",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 29,
                "name"       => "Lajedinho",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 29,
                "name"       => "Lajedo do Tabocal",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 29,
                "name"       => "Lamarão",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 29,
                "name"       => "Lapão",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 29,
                "name"       => "Lauro de Freitas",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 29,
                "name"       => "Lençóis",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 29,
                "name"       => "Licínio de Almeida",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 29,
                "name"       => "Livramento de Nossa Senhora",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 29,
                "name"       => "Luís Eduardo Magalhães",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 29,
                "name"       => "Macajuba",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 29,
                "name"       => "Macarani",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 29,
                "name"       => "Macaúbas",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 29,
                "name"       => "Macururé",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 29,
                "name"       => "Madre de Deus",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 29,
                "name"       => "Maetinga",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 29,
                "name"       => "Maiquinique",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 29,
                "name"       => "Mairi",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 29,
                "name"       => "Malhada",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 29,
                "name"       => "Malhada de Pedras",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 29,
                "name"       => "Manoel Vitorino",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 29,
                "name"       => "Mansidão",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 29,
                "name"       => "Maracás",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 29,
                "name"       => "Maragogipe",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 29,
                "name"       => "Maraú",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 29,
                "name"       => "Marcionílio Souza",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 29,
                "name"       => "Mascote",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 29,
                "name"       => "Mata de São João",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 29,
                "name"       => "Matina",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 29,
                "name"       => "Medeiros Neto",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 29,
                "name"       => "Miguel Calmon",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 29,
                "name"       => "Milagres",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 29,
                "name"       => "Mirangaba",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 29,
                "name"       => "Mirante",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 29,
                "name"       => "Monte Santo",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 29,
                "name"       => "Morpará",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 29,
                "name"       => "Morro do Chapéu",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 29,
                "name"       => "Mortugaba",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 29,
                "name"       => "Mucugê",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 29,
                "name"       => "Mucuri",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 29,
                "name"       => "Mulungu do Morro",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 29,
                "name"       => "Mundo Novo",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 29,
                "name"       => "Muniz Ferreira",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 29,
                "name"       => "Muquém de São Francisco",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 29,
                "name"       => "Muritiba",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 29,
                "name"       => "Mutuípe",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 29,
                "name"       => "Nazaré",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 29,
                "name"       => "Nilo Peçanha",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 29,
                "name"       => "Nordestina",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 29,
                "name"       => "Nova Canaã",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 29,
                "name"       => "Nova Fátima",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 29,
                "name"       => "Nova Ibiá",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 29,
                "name"       => "Nova Itarana",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 29,
                "name"       => "Nova Redenção",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 29,
                "name"       => "Nova Soure",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 29,
                "name"       => "Nova Viçosa",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 29,
                "name"       => "Novo Horizonte",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 29,
                "name"       => "Novo Triunfo",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 29,
                "name"       => "Olindina",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 29,
                "name"       => "Oliveira dos Brejinhos",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 29,
                "name"       => "Ouriçangas",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 29,
                "name"       => "Ourolândia",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 29,
                "name"       => "Palmas de Monte Alto",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 29,
                "name"       => "Palmeiras",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 29,
                "name"       => "Paramirim",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 29,
                "name"       => "Paratinga",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 29,
                "name"       => "Paripiranga",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 29,
                "name"       => "Pau Brasil",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 29,
                "name"       => "Paulo Afonso",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 29,
                "name"       => "Pé de Serra",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 29,
                "name"       => "Pedrão",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 29,
                "name"       => "Pedro Alexandre",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 29,
                "name"       => "Piatã",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 29,
                "name"       => "Pilão Arcado",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 29,
                "name"       => "Pindaí",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 29,
                "name"       => "Pindobaçu",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 29,
                "name"       => "Pintadas",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 29,
                "name"       => "Piraí do Norte",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 29,
                "name"       => "Piripá",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 29,
                "name"       => "Piritiba",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 29,
                "name"       => "Planaltino",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 29,
                "name"       => "Planalto",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 29,
                "name"       => "Poções",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 29,
                "name"       => "Pojuca",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 29,
                "name"       => "Ponto Novo",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 29,
                "name"       => "Porto Seguro",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 29,
                "name"       => "Potiraguá",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 29,
                "name"       => "Prado",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 29,
                "name"       => "Presidente Dutra",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 29,
                "name"       => "Presidente Jânio Quadros",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 29,
                "name"       => "Presidente Tancredo Neves",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 29,
                "name"       => "Queimadas",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 29,
                "name"       => "Quijingue",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 29,
                "name"       => "Quixabeira",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 29,
                "name"       => "Rafael Jambeiro",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 29,
                "name"       => "Remanso",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 29,
                "name"       => "Retirolândia",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 29,
                "name"       => "Riachão das Neves",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 29,
                "name"       => "Riachão do Jacuípe",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 29,
                "name"       => "Riacho de Santana",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 29,
                "name"       => "Ribeira do Amparo",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 29,
                "name"       => "Ribeira do Pombal",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 29,
                "name"       => "Ribeirão do Largo",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 29,
                "name"       => "Rio de Contas",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 29,
                "name"       => "Rio do Antônio",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 29,
                "name"       => "Rio do Pires",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 29,
                "name"       => "Rio Real",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 29,
                "name"       => "Rodelas",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 29,
                "name"       => "Ruy Barbosa",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 29,
                "name"       => "Salinas da Margarida",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 29,
                "name"       => "Salvador",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 29,
                "name"       => "Santa Bárbara",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 29,
                "name"       => "Santa Brígida",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 29,
                "name"       => "Santa Cruz Cabrália",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 29,
                "name"       => "Santa Cruz da Vitória",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 29,
                "name"       => "Santa Inês",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 29,
                "name"       => "Santaluz",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 29,
                "name"       => "Santa Luzia",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 29,
                "name"       => "Santa Maria da Vitória",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 29,
                "name"       => "Santana",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 29,
                "name"       => "Santanópolis",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 29,
                "name"       => "Santa Rita de Cássia",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 29,
                "name"       => "Santa Teresinha",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 29,
                "name"       => "Santo Amaro",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 29,
                "name"       => "Santo Antônio de Jesus",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 29,
                "name"       => "Santo Estêvão",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 29,
                "name"       => "São Desidério",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 29,
                "name"       => "São Domingos",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 29,
                "name"       => "São Félix",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 29,
                "name"       => "São Félix do Coribe",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 29,
                "name"       => "São Felipe",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 29,
                "name"       => "São Francisco do Conde",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 29,
                "name"       => "São Gabriel",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 29,
                "name"       => "São Gonçalo dos Campos",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 29,
                "name"       => "São José da Vitória",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 29,
                "name"       => "São José do Jacuípe",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 29,
                "name"       => "São Miguel das Matas",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 29,
                "name"       => "São Sebastião do Passé",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 29,
                "name"       => "Sapeaçu",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 29,
                "name"       => "Sátiro Dias",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 29,
                "name"       => "Saubara",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 29,
                "name"       => "Saúde",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 29,
                "name"       => "Seabra",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 29,
                "name"       => "Sebastião Laranjeiras",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 29,
                "name"       => "Senhor do Bonfim",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 29,
                "name"       => "Serra do Ramalho",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 29,
                "name"       => "Sento Sé",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 29,
                "name"       => "Serra Dourada",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 29,
                "name"       => "Serra Preta",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 29,
                "name"       => "Serrinha",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 29,
                "name"       => "Serrolândia",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 29,
                "name"       => "Simões Filho",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 29,
                "name"       => "Sítio do Mato",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 29,
                "name"       => "Sítio do Quinto",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 29,
                "name"       => "Sobradinho",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 29,
                "name"       => "Souto Soares",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 29,
                "name"       => "Tabocas do Brejo Velho",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 29,
                "name"       => "Tanhaçu",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 29,
                "name"       => "Tanque Novo",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 29,
                "name"       => "Tanquinho",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 29,
                "name"       => "Taperoá",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 29,
                "name"       => "Tapiramutá",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 29,
                "name"       => "Teixeira de Freitas",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 29,
                "name"       => "Teodoro Sampaio",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 29,
                "name"       => "Teofilândia",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 29,
                "name"       => "Teolândia",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 29,
                "name"       => "Terra Nova",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 29,
                "name"       => "Tremedal",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 29,
                "name"       => "Tucano",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 29,
                "name"       => "Uauá",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 29,
                "name"       => "Ubaíra",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 29,
                "name"       => "Ubaitaba",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 29,
                "name"       => "Ubatã",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 29,
                "name"       => "Uibaí",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 29,
                "name"       => "Umburanas",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 29,
                "name"       => "Una",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 29,
                "name"       => "Urandi",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 29,
                "name"       => "Uruçuca",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 29,
                "name"       => "Utinga",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 29,
                "name"       => "Valença",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 29,
                "name"       => "Valente",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 29,
                "name"       => "Várzea da Roça",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 29,
                "name"       => "Várzea do Poço",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 29,
                "name"       => "Várzea Nova",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 29,
                "name"       => "Varzedo",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 29,
                "name"       => "Vera Cruz",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 29,
                "name"       => "Vereda",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 29,
                "name"       => "Vitória da Conquista",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 29,
                "name"       => "Wagner",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 29,
                "name"       => "Wanderley",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 29,
                "name"       => "Wenceslau Guimarães",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 29,
                "name"       => "Xique-Xique",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 31,
                "name"       => "Abadia dos Dourados",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 31,
                "name"       => "Abaeté",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 31,
                "name"       => "Abre Campo",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 31,
                "name"       => "Acaiaca",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 31,
                "name"       => "Açucena",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 31,
                "name"       => "Água Boa",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 31,
                "name"       => "Água Comprida",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 31,
                "name"       => "Aguanil",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 31,
                "name"       => "Águas Formosas",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 31,
                "name"       => "Águas Vermelhas",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 31,
                "name"       => "Aimorés",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 31,
                "name"       => "Aiuruoca",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 31,
                "name"       => "Alagoa",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 31,
                "name"       => "Albertina",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 31,
                "name"       => "Além Paraíba",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 31,
                "name"       => "Alfenas",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 31,
                "name"       => "Alfredo Vasconcelos",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 31,
                "name"       => "Almenara",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 31,
                "name"       => "Alpercata",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 31,
                "name"       => "Alpinópolis",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 31,
                "name"       => "Alterosa",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 31,
                "name"       => "Alto Caparaó",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 31,
                "name"       => "Alto Rio Doce",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 31,
                "name"       => "Alvarenga",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 31,
                "name"       => "Alvinópolis",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 31,
                "name"       => "Alvorada de Minas",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 31,
                "name"       => "Amparo do Serra",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 31,
                "name"       => "Andradas",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 31,
                "name"       => "Cachoeira de Pajeú",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 31,
                "name"       => "Andrelândia",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 31,
                "name"       => "Angelândia",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 31,
                "name"       => "Antônio Carlos",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 31,
                "name"       => "Antônio Dias",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 31,
                "name"       => "Antônio Prado de Minas",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 31,
                "name"       => "Araçaí",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 31,
                "name"       => "Aracitaba",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 31,
                "name"       => "Araçuaí",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 31,
                "name"       => "Araguari",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 31,
                "name"       => "Arantina",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 31,
                "name"       => "Araponga",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 31,
                "name"       => "Araporã",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 31,
                "name"       => "Arapuá",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 31,
                "name"       => "Araújos",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 31,
                "name"       => "Araxá",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 31,
                "name"       => "Arceburgo",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 31,
                "name"       => "Arcos",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 31,
                "name"       => "Areado",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 31,
                "name"       => "Argirita",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 31,
                "name"       => "Aricanduva",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 31,
                "name"       => "Arinos",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 31,
                "name"       => "Astolfo Dutra",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 31,
                "name"       => "Ataléia",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 31,
                "name"       => "Augusto de Lima",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 31,
                "name"       => "Baependi",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 31,
                "name"       => "Baldim",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 31,
                "name"       => "Bambuí",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 31,
                "name"       => "Bandeira",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 31,
                "name"       => "Bandeira do Sul",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 31,
                "name"       => "Barão de Cocais",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 31,
                "name"       => "Barão de Monte Alto",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 31,
                "name"       => "Barbacena",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 31,
                "name"       => "Barra Longa",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 31,
                "name"       => "Barroso",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 31,
                "name"       => "Bela Vista de Minas",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 31,
                "name"       => "Belmiro Braga",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 31,
                "name"       => "Belo Horizonte",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 31,
                "name"       => "Belo Oriente",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 31,
                "name"       => "Belo Vale",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 31,
                "name"       => "Berilo",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 31,
                "name"       => "Bertópolis",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 31,
                "name"       => "Berizal",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 31,
                "name"       => "Betim",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 31,
                "name"       => "Bias Fortes",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 31,
                "name"       => "Bicas",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 31,
                "name"       => "Biquinhas",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 31,
                "name"       => "Boa Esperança",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 31,
                "name"       => "Bocaina de Minas",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 31,
                "name"       => "Bocaiúva",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 31,
                "name"       => "Bom Despacho",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 31,
                "name"       => "Bom Jardim de Minas",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 31,
                "name"       => "Bom Jesus da Penha",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 31,
                "name"       => "Bom Jesus do Amparo",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 31,
                "name"       => "Bom Jesus do Galho",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 31,
                "name"       => "Bom Repouso",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 31,
                "name"       => "Bom Sucesso",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 31,
                "name"       => "Bonfim",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 31,
                "name"       => "Bonfinópolis de Minas",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 31,
                "name"       => "Bonito de Minas",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 31,
                "name"       => "Borda da Mata",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 31,
                "name"       => "Botelhos",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 31,
                "name"       => "Botumirim",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 31,
                "name"       => "Brasilândia de Minas",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 31,
                "name"       => "Brasília de Minas",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 31,
                "name"       => "Brás Pires",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 31,
                "name"       => "Braúnas",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 31,
                "name"       => "Brazópolis",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 31,
                "name"       => "Brumadinho",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 31,
                "name"       => "Bueno Brandão",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 31,
                "name"       => "Buenópolis",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 31,
                "name"       => "Bugre",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 31,
                "name"       => "Buritis",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 31,
                "name"       => "Buritizeiro",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 31,
                "name"       => "Cabeceira Grande",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 31,
                "name"       => "Cabo Verde",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 31,
                "name"       => "Cachoeira da Prata",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 31,
                "name"       => "Cachoeira de Minas",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 31,
                "name"       => "Cachoeira Dourada",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 31,
                "name"       => "Caetanópolis",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 31,
                "name"       => "Caeté",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 31,
                "name"       => "Caiana",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 31,
                "name"       => "Cajuri",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 31,
                "name"       => "Caldas",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 31,
                "name"       => "Camacho",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 31,
                "name"       => "Camanducaia",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 31,
                "name"       => "Cambuí",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 31,
                "name"       => "Cambuquira",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 31,
                "name"       => "Campanário",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 31,
                "name"       => "Campanha",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 31,
                "name"       => "Campestre",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 31,
                "name"       => "Campina Verde",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 31,
                "name"       => "Campo Azul",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 31,
                "name"       => "Campo Belo",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 31,
                "name"       => "Campo do Meio",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 31,
                "name"       => "Campo Florido",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 31,
                "name"       => "Campos Altos",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 31,
                "name"       => "Campos Gerais",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 31,
                "name"       => "Canaã",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 31,
                "name"       => "Canápolis",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 31,
                "name"       => "Cana Verde",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 31,
                "name"       => "Candeias",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 31,
                "name"       => "Cantagalo",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 31,
                "name"       => "Caparaó",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 31,
                "name"       => "Capela Nova",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 31,
                "name"       => "Capelinha",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 31,
                "name"       => "Capetinga",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 31,
                "name"       => "Capim Branco",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 31,
                "name"       => "Capinópolis",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 31,
                "name"       => "Capitão Andrade",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 31,
                "name"       => "Capitão Enéas",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 31,
                "name"       => "Capitólio",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 31,
                "name"       => "Caputira",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 31,
                "name"       => "Caraí",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 31,
                "name"       => "Caranaíba",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 31,
                "name"       => "Carandaí",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 31,
                "name"       => "Carangola",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 31,
                "name"       => "Caratinga",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 31,
                "name"       => "Carbonita",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 31,
                "name"       => "Careaçu",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 31,
                "name"       => "Carlos Chagas",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 31,
                "name"       => "Carmésia",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 31,
                "name"       => "Carmo da Cachoeira",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 31,
                "name"       => "Carmo da Mata",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 31,
                "name"       => "Carmo de Minas",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 31,
                "name"       => "Carmo do Cajuru",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 31,
                "name"       => "Carmo do Paranaíba",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 31,
                "name"       => "Carmo do Rio Claro",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 31,
                "name"       => "Carmópolis de Minas",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 31,
                "name"       => "Carneirinho",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 31,
                "name"       => "Carrancas",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 31,
                "name"       => "Carvalhópolis",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 31,
                "name"       => "Carvalhos",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 31,
                "name"       => "Casa Grande",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 31,
                "name"       => "Cascalho Rico",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 31,
                "name"       => "Cássia",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 31,
                "name"       => "Conceição da Barra de Minas",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 31,
                "name"       => "Cataguases",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 31,
                "name"       => "Catas Altas",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 31,
                "name"       => "Catas Altas da Noruega",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 31,
                "name"       => "Catuji",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 31,
                "name"       => "Catuti",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 31,
                "name"       => "Caxambu",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 31,
                "name"       => "Cedro do Abaeté",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 31,
                "name"       => "Central de Minas",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 31,
                "name"       => "Centralina",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 31,
                "name"       => "Chácara",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 31,
                "name"       => "Chalé",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 31,
                "name"       => "Chapada do Norte",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 31,
                "name"       => "Chapada Gaúcha",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 31,
                "name"       => "Chiador",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 31,
                "name"       => "Cipotânea",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 31,
                "name"       => "Claraval",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 31,
                "name"       => "Claro dos Poções",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 31,
                "name"       => "Cláudio",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 31,
                "name"       => "Coimbra",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 31,
                "name"       => "Coluna",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 31,
                "name"       => "Comendador Gomes",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 31,
                "name"       => "Comercinho",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 31,
                "name"       => "Conceição da Aparecida",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 31,
                "name"       => "Conceição das Pedras",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 31,
                "name"       => "Conceição das Alagoas",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 31,
                "name"       => "Conceição de Ipanema",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 31,
                "name"       => "Conceição do Mato Dentro",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 31,
                "name"       => "Conceição do Pará",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 31,
                "name"       => "Conceição do Rio Verde",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 31,
                "name"       => "Conceição dos Ouros",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 31,
                "name"       => "Cônego Marinho",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 31,
                "name"       => "Confins",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 31,
                "name"       => "Congonhal",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 31,
                "name"       => "Congonhas",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 31,
                "name"       => "Congonhas do Norte",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 31,
                "name"       => "Conquista",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 31,
                "name"       => "Conselheiro Lafaiete",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 31,
                "name"       => "Conselheiro Pena",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 31,
                "name"       => "Consolação",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 31,
                "name"       => "Contagem",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 31,
                "name"       => "Coqueiral",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 31,
                "name"       => "Coração de Jesus",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 31,
                "name"       => "Cordisburgo",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 31,
                "name"       => "Cordislândia",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 31,
                "name"       => "Corinto",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 31,
                "name"       => "Coroaci",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 31,
                "name"       => "Coromandel",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 31,
                "name"       => "Coronel Fabriciano",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 31,
                "name"       => "Coronel Murta",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 31,
                "name"       => "Coronel Pacheco",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 31,
                "name"       => "Coronel Xavier Chaves",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 31,
                "name"       => "Córrego Danta",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 31,
                "name"       => "Córrego do Bom Jesus",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 31,
                "name"       => "Córrego Fundo",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 31,
                "name"       => "Córrego Novo",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 31,
                "name"       => "Couto de Magalhães de Minas",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 31,
                "name"       => "Crisólita",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 31,
                "name"       => "Cristais",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 31,
                "name"       => "Cristália",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 31,
                "name"       => "Cristiano Otoni",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 31,
                "name"       => "Cristina",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 31,
                "name"       => "Crucilândia",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 31,
                "name"       => "Cruzeiro da Fortaleza",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 31,
                "name"       => "Cruzília",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 31,
                "name"       => "Cuparaque",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 31,
                "name"       => "Curral de Dentro",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 31,
                "name"       => "Curvelo",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 31,
                "name"       => "Datas",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 31,
                "name"       => "Delfim Moreira",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 31,
                "name"       => "Delfinópolis",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 31,
                "name"       => "Delta",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 31,
                "name"       => "Descoberto",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 31,
                "name"       => "Desterro de Entre Rios",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 31,
                "name"       => "Desterro do Melo",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 31,
                "name"       => "Diamantina",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 31,
                "name"       => "Diogo de Vasconcelos",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 31,
                "name"       => "Dionísio",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 31,
                "name"       => "Divinésia",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 31,
                "name"       => "Divino",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 31,
                "name"       => "Divino das Laranjeiras",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 31,
                "name"       => "Divinolândia de Minas",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 31,
                "name"       => "Divinópolis",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 31,
                "name"       => "Divisa Alegre",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 31,
                "name"       => "Divisa Nova",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 31,
                "name"       => "Divisópolis",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 31,
                "name"       => "Dom Bosco",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 31,
                "name"       => "Dom Cavati",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 31,
                "name"       => "Dom Joaquim",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 31,
                "name"       => "Dom Silvério",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 31,
                "name"       => "Dom Viçoso",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 31,
                "name"       => "Dona Eusébia",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 31,
                "name"       => "Dores de Campos",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 31,
                "name"       => "Dores de Guanhães",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 31,
                "name"       => "Dores do Indaiá",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 31,
                "name"       => "Dores do Turvo",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 31,
                "name"       => "Doresópolis",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 31,
                "name"       => "Douradoquara",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 31,
                "name"       => "Durandé",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 31,
                "name"       => "Elói Mendes",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 31,
                "name"       => "Engenheiro Caldas",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 31,
                "name"       => "Engenheiro Navarro",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 31,
                "name"       => "Entre Folhas",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 31,
                "name"       => "Entre Rios de Minas",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 31,
                "name"       => "Ervália",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 31,
                "name"       => "Esmeraldas",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 31,
                "name"       => "Espera Feliz",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 31,
                "name"       => "Espinosa",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 31,
                "name"       => "Espírito Santo do Dourado",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 31,
                "name"       => "Estiva",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 31,
                "name"       => "Estrela Dalva",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 31,
                "name"       => "Estrela do Indaiá",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 31,
                "name"       => "Estrela do Sul",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 31,
                "name"       => "Eugenópolis",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 31,
                "name"       => "Ewbank da Câmara",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 31,
                "name"       => "Extrema",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 31,
                "name"       => "Fama",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 31,
                "name"       => "Faria Lemos",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 31,
                "name"       => "Felício dos Santos",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 31,
                "name"       => "São Gonçalo do Rio Preto",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 31,
                "name"       => "Felisburgo",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 31,
                "name"       => "Felixlândia",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 31,
                "name"       => "Fernandes Tourinho",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 31,
                "name"       => "Ferros",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 31,
                "name"       => "Fervedouro",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 31,
                "name"       => "Florestal",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 31,
                "name"       => "Formiga",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 31,
                "name"       => "Formoso",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 31,
                "name"       => "Fortaleza de Minas",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 31,
                "name"       => "Fortuna de Minas",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 31,
                "name"       => "Francisco Badaró",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 31,
                "name"       => "Francisco Dumont",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 31,
                "name"       => "Francisco Sá",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 31,
                "name"       => "Franciscópolis",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 31,
                "name"       => "Frei Gaspar",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 31,
                "name"       => "Frei Inocêncio",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 31,
                "name"       => "Frei Lagonegro",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 31,
                "name"       => "Fronteira",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 31,
                "name"       => "Fronteira dos Vales",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 31,
                "name"       => "Fruta de Leite",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 31,
                "name"       => "Frutal",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 31,
                "name"       => "Funilândia",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 31,
                "name"       => "Galiléia",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 31,
                "name"       => "Gameleiras",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 31,
                "name"       => "Glaucilândia",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 31,
                "name"       => "Goiabeira",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 31,
                "name"       => "Goianá",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 31,
                "name"       => "Gonçalves",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 31,
                "name"       => "Gonzaga",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 31,
                "name"       => "Gouveia",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 31,
                "name"       => "Governador Valadares",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 31,
                "name"       => "Grão Mogol",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 31,
                "name"       => "Grupiara",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 31,
                "name"       => "Guanhães",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 31,
                "name"       => "Guapé",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 31,
                "name"       => "Guaraciaba",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 31,
                "name"       => "Guaraciama",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 31,
                "name"       => "Guaranésia",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 31,
                "name"       => "Guarani",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 31,
                "name"       => "Guarará",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 31,
                "name"       => "Guarda-Mor",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 31,
                "name"       => "Guaxupé",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 31,
                "name"       => "Guidoval",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 31,
                "name"       => "Guimarânia",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 31,
                "name"       => "Guiricema",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 31,
                "name"       => "Gurinhatã",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 31,
                "name"       => "Heliodora",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 31,
                "name"       => "Iapu",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 31,
                "name"       => "Ibertioga",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 31,
                "name"       => "Ibiá",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 31,
                "name"       => "Ibiaí",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 31,
                "name"       => "Ibiracatu",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 31,
                "name"       => "Ibiraci",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 31,
                "name"       => "Ibirité",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 31,
                "name"       => "Ibitiúra de Minas",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 31,
                "name"       => "Ibituruna",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 31,
                "name"       => "Icaraí de Minas",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 31,
                "name"       => "Igarapé",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 31,
                "name"       => "Igaratinga",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 31,
                "name"       => "Iguatama",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 31,
                "name"       => "Ijaci",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 31,
                "name"       => "Ilicínea",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 31,
                "name"       => "Imbé de Minas",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 31,
                "name"       => "Inconfidentes",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 31,
                "name"       => "Indaiabira",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 31,
                "name"       => "Indianópolis",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 31,
                "name"       => "Ingaí",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 31,
                "name"       => "Inhapim",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 31,
                "name"       => "Inhaúma",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 31,
                "name"       => "Inimutaba",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 31,
                "name"       => "Ipaba",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 31,
                "name"       => "Ipanema",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 31,
                "name"       => "Ipatinga",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 31,
                "name"       => "Ipiaçu",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 31,
                "name"       => "Ipuiúna",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 31,
                "name"       => "Iraí de Minas",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 31,
                "name"       => "Itabira",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 31,
                "name"       => "Itabirinha",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 31,
                "name"       => "Itabirito",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 31,
                "name"       => "Itacambira",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 31,
                "name"       => "Itacarambi",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 31,
                "name"       => "Itaguara",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 31,
                "name"       => "Itaipé",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 31,
                "name"       => "Itajubá",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 31,
                "name"       => "Itamarandiba",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 31,
                "name"       => "Itamarati de Minas",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 31,
                "name"       => "Itambacuri",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 31,
                "name"       => "Itambé do Mato Dentro",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 31,
                "name"       => "Itamogi",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 31,
                "name"       => "Itamonte",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 31,
                "name"       => "Itanhandu",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 31,
                "name"       => "Itanhomi",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 31,
                "name"       => "Itaobim",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 31,
                "name"       => "Itapagipe",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 31,
                "name"       => "Itapecerica",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 31,
                "name"       => "Itapeva",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 31,
                "name"       => "Itatiaiuçu",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 31,
                "name"       => "Itaú de Minas",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 31,
                "name"       => "Itaúna",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 31,
                "name"       => "Itaverava",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 31,
                "name"       => "Itinga",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 31,
                "name"       => "Itueta",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 31,
                "name"       => "Ituiutaba",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 31,
                "name"       => "Itumirim",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 31,
                "name"       => "Iturama",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 31,
                "name"       => "Itutinga",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 31,
                "name"       => "Jaboticatubas",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 31,
                "name"       => "Jacinto",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 31,
                "name"       => "Jacuí",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 31,
                "name"       => "Jacutinga",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 31,
                "name"       => "Jaguaraçu",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 31,
                "name"       => "Jaíba",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 31,
                "name"       => "Jampruca",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 31,
                "name"       => "Janaúba",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 31,
                "name"       => "Januária",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 31,
                "name"       => "Japaraíba",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 31,
                "name"       => "Japonvar",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 31,
                "name"       => "Jeceaba",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 31,
                "name"       => "Jenipapo de Minas",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 31,
                "name"       => "Jequeri",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 31,
                "name"       => "Jequitaí",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 31,
                "name"       => "Jequitibá",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 31,
                "name"       => "Jequitinhonha",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 31,
                "name"       => "Jesuânia",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 31,
                "name"       => "Joaíma",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 31,
                "name"       => "Joanésia",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 31,
                "name"       => "João Monlevade",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 31,
                "name"       => "João Pinheiro",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 31,
                "name"       => "Joaquim Felício",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 31,
                "name"       => "Jordânia",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 31,
                "name"       => "José Gonçalves de Minas",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 31,
                "name"       => "José Raydan",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 31,
                "name"       => "Josenópolis",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 31,
                "name"       => "Nova União",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 31,
                "name"       => "Juatuba",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 31,
                "name"       => "Juiz de Fora",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 31,
                "name"       => "Juramento",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 31,
                "name"       => "Juruaia",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 31,
                "name"       => "Juvenília",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 31,
                "name"       => "Ladainha",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 31,
                "name"       => "Lagamar",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 31,
                "name"       => "Lagoa da Prata",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 31,
                "name"       => "Lagoa dos Patos",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 31,
                "name"       => "Lagoa Dourada",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 31,
                "name"       => "Lagoa Formosa",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 31,
                "name"       => "Lagoa Grande",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 31,
                "name"       => "Lagoa Santa",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 31,
                "name"       => "Lajinha",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 31,
                "name"       => "Lambari",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 31,
                "name"       => "Lamim",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 31,
                "name"       => "Laranjal",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 31,
                "name"       => "Lassance",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 31,
                "name"       => "Lavras",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 31,
                "name"       => "Leandro Ferreira",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 31,
                "name"       => "Leme do Prado",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 31,
                "name"       => "Leopoldina",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 31,
                "name"       => "Liberdade",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 31,
                "name"       => "Lima Duarte",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 31,
                "name"       => "Limeira do Oeste",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 31,
                "name"       => "Lontra",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 31,
                "name"       => "Luisburgo",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 31,
                "name"       => "Luislândia",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 31,
                "name"       => "Luminárias",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 31,
                "name"       => "Luz",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 31,
                "name"       => "Machacalis",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 31,
                "name"       => "Machado",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 31,
                "name"       => "Madre de Deus de Minas",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 31,
                "name"       => "Malacacheta",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 31,
                "name"       => "Mamonas",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 31,
                "name"       => "Manga",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 31,
                "name"       => "Manhuaçu",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 31,
                "name"       => "Manhumirim",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 31,
                "name"       => "Mantena",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 31,
                "name"       => "Maravilhas",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 31,
                "name"       => "Mar de Espanha",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 31,
                "name"       => "Maria da Fé",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 31,
                "name"       => "Mariana",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 31,
                "name"       => "Marilac",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 31,
                "name"       => "Mário Campos",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 31,
                "name"       => "Maripá de Minas",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 31,
                "name"       => "Marliéria",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 31,
                "name"       => "Marmelópolis",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 31,
                "name"       => "Martinho Campos",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 31,
                "name"       => "Martins Soares",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 31,
                "name"       => "Mata Verde",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 31,
                "name"       => "Materlândia",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 31,
                "name"       => "Mateus Leme",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 31,
                "name"       => "Matias Barbosa",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 31,
                "name"       => "Matias Cardoso",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 31,
                "name"       => "Matipó",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 31,
                "name"       => "Mato Verde",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 31,
                "name"       => "Matozinhos",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 31,
                "name"       => "Matutina",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 31,
                "name"       => "Medeiros",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 31,
                "name"       => "Medina",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 31,
                "name"       => "Mendes Pimentel",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 31,
                "name"       => "Mercês",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 31,
                "name"       => "Mesquita",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 31,
                "name"       => "Minas Novas",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 31,
                "name"       => "Minduri",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 31,
                "name"       => "Mirabela",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 31,
                "name"       => "Miradouro",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 31,
                "name"       => "Miraí",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 31,
                "name"       => "Miravânia",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 31,
                "name"       => "Moeda",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 31,
                "name"       => "Moema",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 31,
                "name"       => "Monjolos",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 31,
                "name"       => "Monsenhor Paulo",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 31,
                "name"       => "Montalvânia",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 31,
                "name"       => "Monte Alegre de Minas",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 31,
                "name"       => "Monte Azul",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 31,
                "name"       => "Monte Belo",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 31,
                "name"       => "Monte Carmelo",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 31,
                "name"       => "Monte Formoso",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 31,
                "name"       => "Monte Santo de Minas",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 31,
                "name"       => "Montes Claros",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 31,
                "name"       => "Monte Sião",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 31,
                "name"       => "Montezuma",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 31,
                "name"       => "Morada Nova de Minas",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 31,
                "name"       => "Morro da Garça",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 31,
                "name"       => "Morro do Pilar",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 31,
                "name"       => "Munhoz",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 31,
                "name"       => "Muriaé",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 31,
                "name"       => "Mutum",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 31,
                "name"       => "Muzambinho",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 31,
                "name"       => "Nacip Raydan",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 31,
                "name"       => "Nanuque",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 31,
                "name"       => "Naque",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 31,
                "name"       => "Natalândia",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 31,
                "name"       => "Natércia",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 31,
                "name"       => "Nazareno",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 31,
                "name"       => "Nepomuceno",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 31,
                "name"       => "Ninheira",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 31,
                "name"       => "Nova Belém",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 31,
                "name"       => "Nova Era",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 31,
                "name"       => "Nova Lima",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 31,
                "name"       => "Nova Módica",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 31,
                "name"       => "Nova Ponte",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 31,
                "name"       => "Nova Porteirinha",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 31,
                "name"       => "Nova Resende",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 31,
                "name"       => "Nova Serrana",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 31,
                "name"       => "Novo Cruzeiro",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 31,
                "name"       => "Novo Oriente de Minas",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 31,
                "name"       => "Novorizonte",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 31,
                "name"       => "Olaria",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 31,
                "name"       => "Olhos-d`Água",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 31,
                "name"       => "Olímpio Noronha",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 31,
                "name"       => "Oliveira",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 31,
                "name"       => "Oliveira Fortes",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 31,
                "name"       => "Onça de Pitangui",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 31,
                "name"       => "Oratórios",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 31,
                "name"       => "Orizânia",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 31,
                "name"       => "Ouro Branco",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 31,
                "name"       => "Ouro Fino",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 31,
                "name"       => "Ouro Preto",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 31,
                "name"       => "Ouro Verde de Minas",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 31,
                "name"       => "Padre Carvalho",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 31,
                "name"       => "Padre Paraíso",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 31,
                "name"       => "Paineiras",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 31,
                "name"       => "Pains",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 31,
                "name"       => "Pai Pedro",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 31,
                "name"       => "Paiva",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 31,
                "name"       => "Palma",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 31,
                "name"       => "Palmópolis",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 31,
                "name"       => "Papagaios",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 31,
                "name"       => "Paracatu",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 31,
                "name"       => "Pará de Minas",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 31,
                "name"       => "Paraguaçu",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 31,
                "name"       => "Paraisópolis",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 31,
                "name"       => "Paraopeba",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 31,
                "name"       => "Passabém",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 31,
                "name"       => "Passa Quatro",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 31,
                "name"       => "Passa Tempo",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 31,
                "name"       => "Passa-Vinte",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 31,
                "name"       => "Passos",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 31,
                "name"       => "Patis",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 31,
                "name"       => "Patos de Minas",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 31,
                "name"       => "Patrocínio",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 31,
                "name"       => "Patrocínio do Muriaé",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 31,
                "name"       => "Paula Cândido",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 31,
                "name"       => "Paulistas",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 31,
                "name"       => "Pavão",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 31,
                "name"       => "Peçanha",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 31,
                "name"       => "Pedra Azul",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 31,
                "name"       => "Pedra Bonita",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 31,
                "name"       => "Pedra do Anta",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 31,
                "name"       => "Pedra do Indaiá",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 31,
                "name"       => "Pedra Dourada",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 31,
                "name"       => "Pedralva",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 31,
                "name"       => "Pedras de Maria da Cruz",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 31,
                "name"       => "Pedrinópolis",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 31,
                "name"       => "Pedro Leopoldo",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 31,
                "name"       => "Pedro Teixeira",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 31,
                "name"       => "Pequeri",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 31,
                "name"       => "Pequi",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 31,
                "name"       => "Perdigão",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 31,
                "name"       => "Perdizes",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 31,
                "name"       => "Perdões",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 31,
                "name"       => "Periquito",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 31,
                "name"       => "Pescador",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 31,
                "name"       => "Piau",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 31,
                "name"       => "Piedade de Caratinga",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 31,
                "name"       => "Piedade de Ponte Nova",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 31,
                "name"       => "Piedade do Rio Grande",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 31,
                "name"       => "Piedade dos Gerais",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 31,
                "name"       => "Pimenta",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 31,
                "name"       => "Pingo-d`Água",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 31,
                "name"       => "Pintópolis",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 31,
                "name"       => "Piracema",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 31,
                "name"       => "Pirajuba",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 31,
                "name"       => "Piranga",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 31,
                "name"       => "Piranguçu",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 31,
                "name"       => "Piranguinho",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 31,
                "name"       => "Pirapetinga",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 31,
                "name"       => "Pirapora",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 31,
                "name"       => "Piraúba",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 31,
                "name"       => "Pitangui",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 31,
                "name"       => "Piumhi",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 31,
                "name"       => "Planura",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 31,
                "name"       => "Poço Fundo",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 31,
                "name"       => "Poços de Caldas",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 31,
                "name"       => "Pocrane",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 31,
                "name"       => "Pompéu",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 31,
                "name"       => "Ponte Nova",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 31,
                "name"       => "Ponto Chique",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 31,
                "name"       => "Ponto dos Volantes",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 31,
                "name"       => "Porteirinha",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 31,
                "name"       => "Porto Firme",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 31,
                "name"       => "Poté",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 31,
                "name"       => "Pouso Alegre",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 31,
                "name"       => "Pouso Alto",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 31,
                "name"       => "Prados",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 31,
                "name"       => "Prata",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 31,
                "name"       => "Pratápolis",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 31,
                "name"       => "Pratinha",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 31,
                "name"       => "Presidente Bernardes",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 31,
                "name"       => "Presidente Juscelino",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 31,
                "name"       => "Presidente Kubitschek",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 31,
                "name"       => "Presidente Olegário",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 31,
                "name"       => "Alto Jequitibá",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 31,
                "name"       => "Prudente de Morais",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 31,
                "name"       => "Quartel Geral",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 31,
                "name"       => "Queluzito",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 31,
                "name"       => "Raposos",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 31,
                "name"       => "Raul Soares",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 31,
                "name"       => "Recreio",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 31,
                "name"       => "Reduto",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 31,
                "name"       => "Resende Costa",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 31,
                "name"       => "Resplendor",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 31,
                "name"       => "Ressaquinha",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 31,
                "name"       => "Riachinho",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 31,
                "name"       => "Riacho dos Machados",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 31,
                "name"       => "Ribeirão das Neves",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 31,
                "name"       => "Ribeirão Vermelho",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 31,
                "name"       => "Rio Acima",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 31,
                "name"       => "Rio Casca",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 31,
                "name"       => "Rio Doce",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 31,
                "name"       => "Rio do Prado",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 31,
                "name"       => "Rio Espera",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 31,
                "name"       => "Rio Manso",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 31,
                "name"       => "Rio Novo",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 31,
                "name"       => "Rio Paranaíba",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 31,
                "name"       => "Rio Pardo de Minas",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 31,
                "name"       => "Rio Piracicaba",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 31,
                "name"       => "Rio Pomba",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 31,
                "name"       => "Rio Preto",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 31,
                "name"       => "Rio Vermelho",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 31,
                "name"       => "Ritápolis",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 31,
                "name"       => "Rochedo de Minas",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 31,
                "name"       => "Rodeiro",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 31,
                "name"       => "Romaria",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 31,
                "name"       => "Rosário da Limeira",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 31,
                "name"       => "Rubelita",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 31,
                "name"       => "Rubim",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 31,
                "name"       => "Sabará",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 31,
                "name"       => "Sabinópolis",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 31,
                "name"       => "Sacramento",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 31,
                "name"       => "Salinas",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 31,
                "name"       => "Salto da Divisa",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 31,
                "name"       => "Santa Bárbara",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 31,
                "name"       => "Santa Bárbara do Leste",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 31,
                "name"       => "Santa Bárbara do Monte Verde",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 31,
                "name"       => "Santa Bárbara do Tugúrio",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 31,
                "name"       => "Santa Cruz de Minas",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 31,
                "name"       => "Santa Cruz de Salinas",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 31,
                "name"       => "Santa Cruz do Escalvado",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 31,
                "name"       => "Santa Efigênia de Minas",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 31,
                "name"       => "Santa Fé de Minas",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 31,
                "name"       => "Santa Helena de Minas",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 31,
                "name"       => "Santa Juliana",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 31,
                "name"       => "Santa Luzia",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 31,
                "name"       => "Santa Margarida",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 31,
                "name"       => "Santa Maria de Itabira",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 31,
                "name"       => "Santa Maria do Salto",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 31,
                "name"       => "Santa Maria do Suaçuí",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 31,
                "name"       => "Santana da Vargem",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 31,
                "name"       => "Santana de Cataguases",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 31,
                "name"       => "Santana de Pirapama",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 31,
                "name"       => "Santana do Deserto",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 31,
                "name"       => "Santana do Garambéu",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 31,
                "name"       => "Santana do Jacaré",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 31,
                "name"       => "Santana do Manhuaçu",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 31,
                "name"       => "Santana do Paraíso",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 31,
                "name"       => "Santana do Riacho",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 31,
                "name"       => "Santana dos Montes",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 31,
                "name"       => "Santa Rita de Caldas",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 31,
                "name"       => "Santa Rita de Jacutinga",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 31,
                "name"       => "Santa Rita de Minas",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 31,
                "name"       => "Santa Rita de Ibitipoca",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 31,
                "name"       => "Santa Rita do Itueto",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 31,
                "name"       => "Santa Rita do Sapucaí",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 31,
                "name"       => "Santa Rosa da Serra",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 31,
                "name"       => "Santa Vitória",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 31,
                "name"       => "Santo Antônio do Amparo",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 31,
                "name"       => "Santo Antônio do Aventureiro",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 31,
                "name"       => "Santo Antônio do Grama",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 31,
                "name"       => "Santo Antônio do Itambé",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 31,
                "name"       => "Santo Antônio do Jacinto",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 31,
                "name"       => "Santo Antônio do Monte",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 31,
                "name"       => "Santo Antônio do Retiro",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 31,
                "name"       => "Santo Antônio do Rio Abaixo",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 31,
                "name"       => "Santo Hipólito",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 31,
                "name"       => "Santos Dumont",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 31,
                "name"       => "São Bento Abade",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 31,
                "name"       => "São Brás do Suaçuí",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 31,
                "name"       => "São Domingos das Dores",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 31,
                "name"       => "São Domingos do Prata",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 31,
                "name"       => "São Félix de Minas",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 31,
                "name"       => "São Francisco",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 31,
                "name"       => "São Francisco de Paula",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 31,
                "name"       => "São Francisco de Sales",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 31,
                "name"       => "São Francisco do Glória",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 31,
                "name"       => "São Geraldo",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 31,
                "name"       => "São Geraldo da Piedade",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 31,
                "name"       => "São Geraldo do Baixio",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 31,
                "name"       => "São Gonçalo do Abaeté",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 31,
                "name"       => "São Gonçalo do Pará",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 31,
                "name"       => "São Gonçalo do Rio Abaixo",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 31,
                "name"       => "São Gonçalo do Sapucaí",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 31,
                "name"       => "São Gotardo",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 31,
                "name"       => "São João Batista do Glória",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 31,
                "name"       => "São João da Lagoa",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 31,
                "name"       => "São João da Mata",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 31,
                "name"       => "São João da Ponte",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 31,
                "name"       => "São João das Missões",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 31,
                "name"       => "São João del Rei",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 31,
                "name"       => "São João do Manhuaçu",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 31,
                "name"       => "São João do Manteninha",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 31,
                "name"       => "São João do Oriente",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 31,
                "name"       => "São João do Pacuí",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 31,
                "name"       => "São João do Paraíso",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 31,
                "name"       => "São João Evangelista",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 31,
                "name"       => "São João Nepomuceno",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 31,
                "name"       => "São Joaquim de Bicas",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 31,
                "name"       => "São José da Barra",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 31,
                "name"       => "São José da Lapa",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 31,
                "name"       => "São José da Safira",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 31,
                "name"       => "São José da Varginha",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 31,
                "name"       => "São José do Alegre",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 31,
                "name"       => "São José do Divino",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 31,
                "name"       => "São José do Goiabal",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 31,
                "name"       => "São José do Jacuri",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 31,
                "name"       => "São José do Mantimento",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 31,
                "name"       => "São Lourenço",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 31,
                "name"       => "São Miguel do Anta",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 31,
                "name"       => "São Pedro da União",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 31,
                "name"       => "São Pedro dos Ferros",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 31,
                "name"       => "São Pedro do Suaçuí",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 31,
                "name"       => "São Romão",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 31,
                "name"       => "São Roque de Minas",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 31,
                "name"       => "São Sebastião da Bela Vista",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 31,
                "name"       => "São Sebastião da Vargem Alegre",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 31,
                "name"       => "São Sebastião do Anta",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 31,
                "name"       => "São Sebastião do Maranhão",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 31,
                "name"       => "São Sebastião do Oeste",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 31,
                "name"       => "São Sebastião do Paraíso",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 31,
                "name"       => "São Sebastião do Rio Preto",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 31,
                "name"       => "São Sebastião do Rio Verde",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 31,
                "name"       => "São Tiago",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 31,
                "name"       => "São Tomás de Aquino",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 31,
                "name"       => "São Thomé das Letras",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 31,
                "name"       => "São Vicente de Minas",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 31,
                "name"       => "Sapucaí-Mirim",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 31,
                "name"       => "Sardoá",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 31,
                "name"       => "Sarzedo",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 31,
                "name"       => "Setubinha",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 31,
                "name"       => "Sem-Peixe",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 31,
                "name"       => "Senador Amaral",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 31,
                "name"       => "Senador Cortes",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 31,
                "name"       => "Senador Firmino",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 31,
                "name"       => "Senador José Bento",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 31,
                "name"       => "Senador Modestino Gonçalves",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 31,
                "name"       => "Senhora de Oliveira",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 31,
                "name"       => "Senhora do Porto",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 31,
                "name"       => "Senhora dos Remédios",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 31,
                "name"       => "Sericita",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 31,
                "name"       => "Seritinga",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 31,
                "name"       => "Serra Azul de Minas",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 31,
                "name"       => "Serra da Saudade",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 31,
                "name"       => "Serra dos Aimorés",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 31,
                "name"       => "Serra do Salitre",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 31,
                "name"       => "Serrania",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 31,
                "name"       => "Serranópolis de Minas",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 31,
                "name"       => "Serranos",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 31,
                "name"       => "Serro",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 31,
                "name"       => "Sete Lagoas",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 31,
                "name"       => "Silveirânia",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 31,
                "name"       => "Silvianópolis",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 31,
                "name"       => "Simão Pereira",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 31,
                "name"       => "Simonésia",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 31,
                "name"       => "Sobrália",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 31,
                "name"       => "Soledade de Minas",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 31,
                "name"       => "Tabuleiro",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 31,
                "name"       => "Taiobeiras",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 31,
                "name"       => "Taparuba",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 31,
                "name"       => "Tapira",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 31,
                "name"       => "Tapiraí",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 31,
                "name"       => "Taquaraçu de Minas",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 31,
                "name"       => "Tarumirim",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 31,
                "name"       => "Teixeiras",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 31,
                "name"       => "Teófilo Otoni",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 31,
                "name"       => "Timóteo",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 31,
                "name"       => "Tiradentes",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 31,
                "name"       => "Tiros",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 31,
                "name"       => "Tocantins",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 31,
                "name"       => "Tocos do Moji",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 31,
                "name"       => "Toledo",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 31,
                "name"       => "Tombos",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 31,
                "name"       => "Três Corações",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 31,
                "name"       => "Três Marias",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 31,
                "name"       => "Três Pontas",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 31,
                "name"       => "Tumiritinga",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 31,
                "name"       => "Tupaciguara",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 31,
                "name"       => "Turmalina",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 31,
                "name"       => "Turvolândia",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 31,
                "name"       => "Ubá",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 31,
                "name"       => "Ubaí",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 31,
                "name"       => "Ubaporanga",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 31,
                "name"       => "Uberaba",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 31,
                "name"       => "Uberlândia",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 31,
                "name"       => "Umburatiba",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 31,
                "name"       => "Unaí",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 31,
                "name"       => "União de Minas",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 31,
                "name"       => "Uruana de Minas",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 31,
                "name"       => "Urucânia",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 31,
                "name"       => "Urucuia",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 31,
                "name"       => "Vargem Alegre",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 31,
                "name"       => "Vargem Bonita",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 31,
                "name"       => "Vargem Grande do Rio Pardo",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 31,
                "name"       => "Varginha",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 31,
                "name"       => "Varjão de Minas",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 31,
                "name"       => "Várzea da Palma",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 31,
                "name"       => "Varzelândia",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 31,
                "name"       => "Vazante",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 31,
                "name"       => "Verdelândia",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 31,
                "name"       => "Veredinha",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 31,
                "name"       => "Veríssimo",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 31,
                "name"       => "Vermelho Novo",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 31,
                "name"       => "Vespasiano",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 31,
                "name"       => "Viçosa",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 31,
                "name"       => "Vieiras",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 31,
                "name"       => "Mathias Lobato",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 31,
                "name"       => "Virgem da Lapa",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 31,
                "name"       => "Virgínia",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 31,
                "name"       => "Virginópolis",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 31,
                "name"       => "Virgolândia",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 31,
                "name"       => "Visconde do Rio Branco",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 31,
                "name"       => "Volta Grande",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 31,
                "name"       => "Wenceslau Braz",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 32,
                "name"       => "Afonso Cláudio",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 32,
                "name"       => "Águia Branca",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 32,
                "name"       => "Água Doce do Norte",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 32,
                "name"       => "Alegre",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 32,
                "name"       => "Alfredo Chaves",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 32,
                "name"       => "Alto Rio Novo",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 32,
                "name"       => "Anchieta",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 32,
                "name"       => "Apiacá",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 32,
                "name"       => "Aracruz",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 32,
                "name"       => "Atilio Vivacqua",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 32,
                "name"       => "Baixo Guandu",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 32,
                "name"       => "Barra de São Francisco",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 32,
                "name"       => "Boa Esperança",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 32,
                "name"       => "Bom Jesus do Norte",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 32,
                "name"       => "Brejetuba",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 32,
                "name"       => "Cachoeiro de Itapemirim",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 32,
                "name"       => "Cariacica",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 32,
                "name"       => "Castelo",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 32,
                "name"       => "Colatina",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 32,
                "name"       => "Conceição da Barra",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 32,
                "name"       => "Conceição do Castelo",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 32,
                "name"       => "Divino de São Lourenço",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 32,
                "name"       => "Domingos Martins",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 32,
                "name"       => "Dores do Rio Preto",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 32,
                "name"       => "Ecoporanga",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 32,
                "name"       => "Fundão",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 32,
                "name"       => "Governador Lindenberg",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 32,
                "name"       => "Guaçuí",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 32,
                "name"       => "Guarapari",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 32,
                "name"       => "Ibatiba",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 32,
                "name"       => "Ibiraçu",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 32,
                "name"       => "Ibitirama",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 32,
                "name"       => "Iconha",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 32,
                "name"       => "Irupi",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 32,
                "name"       => "Itaguaçu",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 32,
                "name"       => "Itapemirim",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 32,
                "name"       => "Itarana",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 32,
                "name"       => "Iúna",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 32,
                "name"       => "Jaguaré",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 32,
                "name"       => "Jerônimo Monteiro",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 32,
                "name"       => "João Neiva",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 32,
                "name"       => "Laranja da Terra",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 32,
                "name"       => "Linhares",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 32,
                "name"       => "Mantenópolis",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 32,
                "name"       => "Marataízes",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 32,
                "name"       => "Marechal Floriano",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 32,
                "name"       => "Marilândia",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 32,
                "name"       => "Mimoso do Sul",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 32,
                "name"       => "Montanha",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 32,
                "name"       => "Mucurici",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 32,
                "name"       => "Muniz Freire",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 32,
                "name"       => "Muqui",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 32,
                "name"       => "Nova Venécia",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 32,
                "name"       => "Pancas",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 32,
                "name"       => "Pedro Canário",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 32,
                "name"       => "Pinheiros",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 32,
                "name"       => "Piúma",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 32,
                "name"       => "Ponto Belo",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 32,
                "name"       => "Presidente Kennedy",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 32,
                "name"       => "Rio Bananal",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 32,
                "name"       => "Rio Novo do Sul",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 32,
                "name"       => "Santa Leopoldina",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 32,
                "name"       => "Santa Maria de Jetibá",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 32,
                "name"       => "Santa Teresa",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 32,
                "name"       => "São Domingos do Norte",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 32,
                "name"       => "São Gabriel da Palha",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 32,
                "name"       => "São José do Calçado",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 32,
                "name"       => "São Mateus",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 32,
                "name"       => "São Roque do Canaã",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 32,
                "name"       => "Serra",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 32,
                "name"       => "Sooretama",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 32,
                "name"       => "Vargem Alta",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 32,
                "name"       => "Venda Nova do Imigrante",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 32,
                "name"       => "Viana",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 32,
                "name"       => "Vila Pavão",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 32,
                "name"       => "Vila Valério",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 32,
                "name"       => "Vila Velha",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 32,
                "name"       => "Vitória",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 33,
                "name"       => "Angra dos Reis",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 33,
                "name"       => "Aperibé",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 33,
                "name"       => "Araruama",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 33,
                "name"       => "Areal",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 33,
                "name"       => "Armação dos Búzios",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 33,
                "name"       => "Arraial do Cabo",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 33,
                "name"       => "Barra do Piraí",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 33,
                "name"       => "Barra Mansa",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 33,
                "name"       => "Belford Roxo",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 33,
                "name"       => "Bom Jardim",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 33,
                "name"       => "Bom Jesus do Itabapoana",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 33,
                "name"       => "Cabo Frio",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 33,
                "name"       => "Cachoeiras de Macacu",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 33,
                "name"       => "Cambuci",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 33,
                "name"       => "Carapebus",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 33,
                "name"       => "Comendador Levy Gasparian",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 33,
                "name"       => "Campos dos Goytacazes",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 33,
                "name"       => "Cantagalo",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 33,
                "name"       => "Cardoso Moreira",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 33,
                "name"       => "Carmo",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 33,
                "name"       => "Casimiro de Abreu",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 33,
                "name"       => "Conceição de Macabu",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 33,
                "name"       => "Cordeiro",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 33,
                "name"       => "Duas Barras",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 33,
                "name"       => "Duque de Caxias",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 33,
                "name"       => "Engenheiro Paulo de Frontin",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 33,
                "name"       => "Guapimirim",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 33,
                "name"       => "Iguaba Grande",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 33,
                "name"       => "Itaboraí",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 33,
                "name"       => "Itaguaí",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 33,
                "name"       => "Italva",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 33,
                "name"       => "Itaocara",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 33,
                "name"       => "Itaperuna",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 33,
                "name"       => "Itatiaia",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 33,
                "name"       => "Japeri",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 33,
                "name"       => "Laje do Muriaé",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 33,
                "name"       => "Macaé",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 33,
                "name"       => "Macuco",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 33,
                "name"       => "Magé",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 33,
                "name"       => "Mangaratiba",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 33,
                "name"       => "Maricá",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 33,
                "name"       => "Mendes",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 33,
                "name"       => "Mesquita",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 33,
                "name"       => "Miguel Pereira",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 33,
                "name"       => "Miracema",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 33,
                "name"       => "Natividade",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 33,
                "name"       => "Nilópolis",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 33,
                "name"       => "Niterói",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 33,
                "name"       => "Nova Friburgo",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 33,
                "name"       => "Nova Iguaçu",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 33,
                "name"       => "Paracambi",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 33,
                "name"       => "Paraíba do Sul",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 33,
                "name"       => "Paraty",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 33,
                "name"       => "Paty do Alferes",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 33,
                "name"       => "Petrópolis",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 33,
                "name"       => "Pinheiral",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 33,
                "name"       => "Piraí",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 33,
                "name"       => "Porciúncula",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 33,
                "name"       => "Porto Real",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 33,
                "name"       => "Quatis",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 33,
                "name"       => "Queimados",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 33,
                "name"       => "Quissamã",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 33,
                "name"       => "Resende",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 33,
                "name"       => "Rio Bonito",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 33,
                "name"       => "Rio Claro",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 33,
                "name"       => "Rio das Flores",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 33,
                "name"       => "Rio das Ostras",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 33,
                "name"       => "Rio de Janeiro",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 33,
                "name"       => "Santa Maria Madalena",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 33,
                "name"       => "Santo Antônio de Pádua",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 33,
                "name"       => "São Francisco de Itabapoana",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 33,
                "name"       => "São Fidélis",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 33,
                "name"       => "São Gonçalo",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 33,
                "name"       => "São João da Barra",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 33,
                "name"       => "São João de Meriti",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 33,
                "name"       => "São José de Ubá",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 33,
                "name"       => "São José do Vale do Rio Preto",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 33,
                "name"       => "São Pedro da Aldeia",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 33,
                "name"       => "São Sebastião do Alto",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 33,
                "name"       => "Sapucaia",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 33,
                "name"       => "Saquarema",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 33,
                "name"       => "Seropédica",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 33,
                "name"       => "Silva Jardim",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 33,
                "name"       => "Sumidouro",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 33,
                "name"       => "Tanguá",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 33,
                "name"       => "Teresópolis",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 33,
                "name"       => "Trajano de Moraes",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 33,
                "name"       => "Três Rios",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 33,
                "name"       => "Valença",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 33,
                "name"       => "Varre-Sai",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 33,
                "name"       => "Vassouras",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 33,
                "name"       => "Volta Redonda",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 35,
                "name"       => "Adamantina",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 35,
                "name"       => "Adolfo",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 35,
                "name"       => "Aguaí",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 35,
                "name"       => "Águas da Prata",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 35,
                "name"       => "Águas de Lindóia",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 35,
                "name"       => "Águas de Santa Bárbara",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 35,
                "name"       => "Águas de São Pedro",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 35,
                "name"       => "Agudos",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 35,
                "name"       => "Alambari",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 35,
                "name"       => "Alfredo Marcondes",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 35,
                "name"       => "Altair",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 35,
                "name"       => "Altinópolis",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 35,
                "name"       => "Alto Alegre",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 35,
                "name"       => "Alumínio",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 35,
                "name"       => "Álvares Florence",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 35,
                "name"       => "Álvares Machado",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 35,
                "name"       => "Álvaro de Carvalho",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 35,
                "name"       => "Alvinlândia",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 35,
                "name"       => "Americana",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 35,
                "name"       => "Américo Brasiliense",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 35,
                "name"       => "Américo de Campos",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 35,
                "name"       => "Amparo",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 35,
                "name"       => "Analândia",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 35,
                "name"       => "Andradina",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 35,
                "name"       => "Angatuba",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 35,
                "name"       => "Anhembi",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 35,
                "name"       => "Anhumas",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 35,
                "name"       => "Aparecida",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 35,
                "name"       => "Aparecida d`Oeste",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 35,
                "name"       => "Apiaí",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 35,
                "name"       => "Araçariguama",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 35,
                "name"       => "Araçatuba",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 35,
                "name"       => "Araçoiaba da Serra",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 35,
                "name"       => "Aramina",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 35,
                "name"       => "Arandu",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 35,
                "name"       => "Arapeí",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 35,
                "name"       => "Araraquara",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 35,
                "name"       => "Araras",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 35,
                "name"       => "Arco-Íris",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 35,
                "name"       => "Arealva",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 35,
                "name"       => "Areias",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 35,
                "name"       => "Areiópolis",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 35,
                "name"       => "Ariranha",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 35,
                "name"       => "Artur Nogueira",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 35,
                "name"       => "Arujá",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 35,
                "name"       => "Aspásia",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 35,
                "name"       => "Assis",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 35,
                "name"       => "Atibaia",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 35,
                "name"       => "Auriflama",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 35,
                "name"       => "Avaí",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 35,
                "name"       => "Avanhandava",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 35,
                "name"       => "Avaré",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 35,
                "name"       => "Bady Bassitt",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 35,
                "name"       => "Balbinos",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 35,
                "name"       => "Bálsamo",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 35,
                "name"       => "Bananal",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 35,
                "name"       => "Barão de Antonina",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 35,
                "name"       => "Barbosa",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 35,
                "name"       => "Bariri",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 35,
                "name"       => "Barra Bonita",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 35,
                "name"       => "Barra do Chapéu",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 35,
                "name"       => "Barra do Turvo",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 35,
                "name"       => "Barretos",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 35,
                "name"       => "Barrinha",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 35,
                "name"       => "Barueri",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 35,
                "name"       => "Bastos",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 35,
                "name"       => "Batatais",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 35,
                "name"       => "Bauru",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 35,
                "name"       => "Bebedouro",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 35,
                "name"       => "Bento de Abreu",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 35,
                "name"       => "Bernardino de Campos",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 35,
                "name"       => "Bertioga",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 35,
                "name"       => "Bilac",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 35,
                "name"       => "Birigui",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 35,
                "name"       => "Biritiba-Mirim",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 35,
                "name"       => "Boa Esperança do Sul",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 35,
                "name"       => "Bocaina",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 35,
                "name"       => "Bofete",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 35,
                "name"       => "Boituva",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 35,
                "name"       => "Bom Jesus dos Perdões",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 35,
                "name"       => "Bom Sucesso de Itararé",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 35,
                "name"       => "Borá",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 35,
                "name"       => "Boracéia",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 35,
                "name"       => "Borborema",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 35,
                "name"       => "Borebi",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 35,
                "name"       => "Botucatu",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 35,
                "name"       => "Bragança Paulista",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 35,
                "name"       => "Braúna",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 35,
                "name"       => "Brejo Alegre",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 35,
                "name"       => "Brodowski",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 35,
                "name"       => "Brotas",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 35,
                "name"       => "Buri",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 35,
                "name"       => "Buritama",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 35,
                "name"       => "Buritizal",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 35,
                "name"       => "Cabrália Paulista",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 35,
                "name"       => "Cabreúva",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 35,
                "name"       => "Caçapava",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 35,
                "name"       => "Cachoeira Paulista",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 35,
                "name"       => "Caconde",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 35,
                "name"       => "Cafelândia",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 35,
                "name"       => "Caiabu",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 35,
                "name"       => "Caieiras",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 35,
                "name"       => "Caiuá",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 35,
                "name"       => "Cajamar",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 35,
                "name"       => "Cajati",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 35,
                "name"       => "Cajobi",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 35,
                "name"       => "Cajuru",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 35,
                "name"       => "Campina do Monte Alegre",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 35,
                "name"       => "Campinas",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 35,
                "name"       => "Campo Limpo Paulista",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 35,
                "name"       => "Campos do Jordão",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 35,
                "name"       => "Campos Novos Paulista",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 35,
                "name"       => "Cananéia",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 35,
                "name"       => "Canas",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 35,
                "name"       => "Cândido Mota",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 35,
                "name"       => "Cândido Rodrigues",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 35,
                "name"       => "Canitar",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 35,
                "name"       => "Capão Bonito",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 35,
                "name"       => "Capela do Alto",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 35,
                "name"       => "Capivari",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 35,
                "name"       => "Caraguatatuba",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 35,
                "name"       => "Carapicuíba",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 35,
                "name"       => "Cardoso",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 35,
                "name"       => "Casa Branca",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 35,
                "name"       => "Cássia dos Coqueiros",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 35,
                "name"       => "Castilho",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 35,
                "name"       => "Catanduva",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 35,
                "name"       => "Catiguá",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 35,
                "name"       => "Cedral",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 35,
                "name"       => "Cerqueira César",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 35,
                "name"       => "Cerquilho",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 35,
                "name"       => "Cesário Lange",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 35,
                "name"       => "Charqueada",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 35,
                "name"       => "Clementina",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 35,
                "name"       => "Colina",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 35,
                "name"       => "Colômbia",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 35,
                "name"       => "Conchal",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 35,
                "name"       => "Conchas",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 35,
                "name"       => "Cordeirópolis",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 35,
                "name"       => "Coroados",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 35,
                "name"       => "Coronel Macedo",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 35,
                "name"       => "Corumbataí",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 35,
                "name"       => "Cosmópolis",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 35,
                "name"       => "Cosmorama",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 35,
                "name"       => "Cotia",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 35,
                "name"       => "Cravinhos",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 35,
                "name"       => "Cristais Paulista",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 35,
                "name"       => "Cruzália",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 35,
                "name"       => "Cruzeiro",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 35,
                "name"       => "Cubatão",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 35,
                "name"       => "Cunha",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 35,
                "name"       => "Descalvado",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 35,
                "name"       => "Diadema",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 35,
                "name"       => "Dirce Reis",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 35,
                "name"       => "Divinolândia",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 35,
                "name"       => "Dobrada",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 35,
                "name"       => "Dois Córregos",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 35,
                "name"       => "Dolcinópolis",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 35,
                "name"       => "Dourado",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 35,
                "name"       => "Dracena",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 35,
                "name"       => "Duartina",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 35,
                "name"       => "Dumont",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 35,
                "name"       => "Echaporã",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 35,
                "name"       => "Eldorado",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 35,
                "name"       => "Elias Fausto",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 35,
                "name"       => "Elisiário",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 35,
                "name"       => "Embaúba",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 35,
                "name"       => "Embu das Artes",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 35,
                "name"       => "Embu-Guaçu",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 35,
                "name"       => "Emilianópolis",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 35,
                "name"       => "Engenheiro Coelho",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 35,
                "name"       => "Espírito Santo do Pinhal",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 35,
                "name"       => "Espírito Santo do Turvo",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 35,
                "name"       => "Estrela d`Oeste",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 35,
                "name"       => "Estrela do Norte",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 35,
                "name"       => "Euclides da Cunha Paulista",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 35,
                "name"       => "Fartura",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 35,
                "name"       => "Fernandópolis",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 35,
                "name"       => "Fernando Prestes",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 35,
                "name"       => "Fernão",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 35,
                "name"       => "Ferraz de Vasconcelos",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 35,
                "name"       => "Flora Rica",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 35,
                "name"       => "Floreal",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 35,
                "name"       => "Flórida Paulista",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 35,
                "name"       => "Florínia",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 35,
                "name"       => "Franca",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 35,
                "name"       => "Francisco Morato",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 35,
                "name"       => "Franco da Rocha",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 35,
                "name"       => "Gabriel Monteiro",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 35,
                "name"       => "Gália",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 35,
                "name"       => "Garça",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 35,
                "name"       => "Gastão Vidigal",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 35,
                "name"       => "Gavião Peixoto",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 35,
                "name"       => "General Salgado",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 35,
                "name"       => "Getulina",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 35,
                "name"       => "Glicério",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 35,
                "name"       => "Guaiçara",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 35,
                "name"       => "Guaimbê",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 35,
                "name"       => "Guaíra",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 35,
                "name"       => "Guapiaçu",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 35,
                "name"       => "Guapiara",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 35,
                "name"       => "Guará",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 35,
                "name"       => "Guaraçaí",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 35,
                "name"       => "Guaraci",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 35,
                "name"       => "Guarani d`Oeste",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 35,
                "name"       => "Guarantã",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 35,
                "name"       => "Guararapes",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 35,
                "name"       => "Guararema",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 35,
                "name"       => "Guaratinguetá",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 35,
                "name"       => "Guareí",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 35,
                "name"       => "Guariba",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 35,
                "name"       => "Guarujá",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 35,
                "name"       => "Guarulhos",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 35,
                "name"       => "Guatapará",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 35,
                "name"       => "Guzolândia",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 35,
                "name"       => "Herculândia",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 35,
                "name"       => "Holambra",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 35,
                "name"       => "Hortolândia",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 35,
                "name"       => "Iacanga",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 35,
                "name"       => "Iacri",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 35,
                "name"       => "Iaras",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 35,
                "name"       => "Ibaté",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 35,
                "name"       => "Ibirá",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 35,
                "name"       => "Ibirarema",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 35,
                "name"       => "Ibitinga",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 35,
                "name"       => "Ibiúna",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 35,
                "name"       => "Icém",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 35,
                "name"       => "Iepê",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 35,
                "name"       => "Igaraçu do Tietê",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 35,
                "name"       => "Igarapava",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 35,
                "name"       => "Igaratá",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 35,
                "name"       => "Iguape",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 35,
                "name"       => "Ilhabela",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 35,
                "name"       => "Ilha Comprida",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 35,
                "name"       => "Ilha Solteira",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 35,
                "name"       => "Indaiatuba",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 35,
                "name"       => "Indiana",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 35,
                "name"       => "Indiaporã",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 35,
                "name"       => "Inúbia Paulista",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 35,
                "name"       => "Ipaussu",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 35,
                "name"       => "Iperó",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 35,
                "name"       => "Ipeúna",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 35,
                "name"       => "Ipiguá",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 35,
                "name"       => "Iporanga",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 35,
                "name"       => "Ipuã",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 35,
                "name"       => "Iracemápolis",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 35,
                "name"       => "Irapuã",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 35,
                "name"       => "Irapuru",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 35,
                "name"       => "Itaberá",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 35,
                "name"       => "Itaí",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 35,
                "name"       => "Itajobi",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 35,
                "name"       => "Itaju",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 35,
                "name"       => "Itanhaém",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 35,
                "name"       => "Itaóca",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 35,
                "name"       => "Itapecerica da Serra",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 35,
                "name"       => "Itapetininga",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 35,
                "name"       => "Itapeva",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 35,
                "name"       => "Itapevi",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 35,
                "name"       => "Itapira",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 35,
                "name"       => "Itapirapuã Paulista",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 35,
                "name"       => "Itápolis",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 35,
                "name"       => "Itaporanga",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 35,
                "name"       => "Itapuí",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 35,
                "name"       => "Itapura",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 35,
                "name"       => "Itaquaquecetuba",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 35,
                "name"       => "Itararé",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 35,
                "name"       => "Itariri",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 35,
                "name"       => "Itatiba",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 35,
                "name"       => "Itatinga",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 35,
                "name"       => "Itirapina",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 35,
                "name"       => "Itirapuã",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 35,
                "name"       => "Itobi",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 35,
                "name"       => "Itu",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 35,
                "name"       => "Itupeva",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 35,
                "name"       => "Ituverava",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 35,
                "name"       => "Jaborandi",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 35,
                "name"       => "Jaboticabal",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 35,
                "name"       => "Jacareí",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 35,
                "name"       => "Jaci",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 35,
                "name"       => "Jacupiranga",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 35,
                "name"       => "Jaguariúna",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 35,
                "name"       => "Jales",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 35,
                "name"       => "Jambeiro",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 35,
                "name"       => "Jandira",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 35,
                "name"       => "Jardinópolis",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 35,
                "name"       => "Jarinu",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 35,
                "name"       => "Jaú",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 35,
                "name"       => "Jeriquara",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 35,
                "name"       => "Joanópolis",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 35,
                "name"       => "João Ramalho",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 35,
                "name"       => "José Bonifácio",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 35,
                "name"       => "Júlio Mesquita",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 35,
                "name"       => "Jumirim",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 35,
                "name"       => "Jundiaí",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 35,
                "name"       => "Junqueirópolis",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 35,
                "name"       => "Juquiá",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 35,
                "name"       => "Juquitiba",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 35,
                "name"       => "Lagoinha",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 35,
                "name"       => "Laranjal Paulista",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 35,
                "name"       => "Lavínia",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 35,
                "name"       => "Lavrinhas",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 35,
                "name"       => "Leme",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 35,
                "name"       => "Lençóis Paulista",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 35,
                "name"       => "Limeira",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 35,
                "name"       => "Lindóia",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 35,
                "name"       => "Lins",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 35,
                "name"       => "Lorena",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 35,
                "name"       => "Lourdes",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 35,
                "name"       => "Louveira",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 35,
                "name"       => "Lucélia",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 35,
                "name"       => "Lucianópolis",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 35,
                "name"       => "Luís Antônio",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 35,
                "name"       => "Luiziânia",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 35,
                "name"       => "Lupércio",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 35,
                "name"       => "Lutécia",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 35,
                "name"       => "Macatuba",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 35,
                "name"       => "Macaubal",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 35,
                "name"       => "Macedônia",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 35,
                "name"       => "Magda",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 35,
                "name"       => "Mairinque",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 35,
                "name"       => "Mairiporã",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 35,
                "name"       => "Manduri",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 35,
                "name"       => "Marabá Paulista",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 35,
                "name"       => "Maracaí",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 35,
                "name"       => "Marapoama",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 35,
                "name"       => "Mariápolis",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 35,
                "name"       => "Marília",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 35,
                "name"       => "Marinópolis",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 35,
                "name"       => "Martinópolis",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 35,
                "name"       => "Matão",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 35,
                "name"       => "Mauá",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 35,
                "name"       => "Mendonça",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 35,
                "name"       => "Meridiano",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 35,
                "name"       => "Mesópolis",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 35,
                "name"       => "Miguelópolis",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 35,
                "name"       => "Mineiros do Tietê",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 35,
                "name"       => "Miracatu",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 35,
                "name"       => "Mira Estrela",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 35,
                "name"       => "Mirandópolis",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 35,
                "name"       => "Mirante do Paranapanema",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 35,
                "name"       => "Mirassol",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 35,
                "name"       => "Mirassolândia",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 35,
                "name"       => "Mococa",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 35,
                "name"       => "Mogi das Cruzes",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 35,
                "name"       => "Mogi Guaçu",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 35,
                "name"       => "Moji Mirim",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 35,
                "name"       => "Mombuca",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 35,
                "name"       => "Monções",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 35,
                "name"       => "Mongaguá",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 35,
                "name"       => "Monte Alegre do Sul",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 35,
                "name"       => "Monte Alto",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 35,
                "name"       => "Monte Aprazível",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 35,
                "name"       => "Monte Azul Paulista",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 35,
                "name"       => "Monte Castelo",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 35,
                "name"       => "Monteiro Lobato",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 35,
                "name"       => "Monte Mor",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 35,
                "name"       => "Morro Agudo",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 35,
                "name"       => "Morungaba",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 35,
                "name"       => "Motuca",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 35,
                "name"       => "Murutinga do Sul",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 35,
                "name"       => "Nantes",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 35,
                "name"       => "Narandiba",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 35,
                "name"       => "Natividade da Serra",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 35,
                "name"       => "Nazaré Paulista",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 35,
                "name"       => "Neves Paulista",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 35,
                "name"       => "Nhandeara",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 35,
                "name"       => "Nipoã",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 35,
                "name"       => "Nova Aliança",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 35,
                "name"       => "Nova Campina",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 35,
                "name"       => "Nova Canaã Paulista",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 35,
                "name"       => "Nova Castilho",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 35,
                "name"       => "Nova Europa",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 35,
                "name"       => "Nova Granada",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 35,
                "name"       => "Nova Guataporanga",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 35,
                "name"       => "Nova Independência",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 35,
                "name"       => "Novais",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 35,
                "name"       => "Nova Luzitânia",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 35,
                "name"       => "Nova Odessa",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 35,
                "name"       => "Novo Horizonte",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 35,
                "name"       => "Nuporanga",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 35,
                "name"       => "Ocauçu",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 35,
                "name"       => "Óleo",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 35,
                "name"       => "Olímpia",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 35,
                "name"       => "Onda Verde",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 35,
                "name"       => "Oriente",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 35,
                "name"       => "Orindiúva",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 35,
                "name"       => "Orlândia",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 35,
                "name"       => "Osasco",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 35,
                "name"       => "Oscar Bressane",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 35,
                "name"       => "Osvaldo Cruz",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 35,
                "name"       => "Ourinhos",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 35,
                "name"       => "Ouroeste",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 35,
                "name"       => "Ouro Verde",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 35,
                "name"       => "Pacaembu",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 35,
                "name"       => "Palestina",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 35,
                "name"       => "Palmares Paulista",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 35,
                "name"       => "Palmeira d`Oeste",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 35,
                "name"       => "Palmital",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 35,
                "name"       => "Panorama",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 35,
                "name"       => "Paraguaçu Paulista",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 35,
                "name"       => "Paraibuna",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 35,
                "name"       => "Paraíso",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 35,
                "name"       => "Paranapanema",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 35,
                "name"       => "Paranapuã",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 35,
                "name"       => "Parapuã",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 35,
                "name"       => "Pardinho",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 35,
                "name"       => "Pariquera-Açu",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 35,
                "name"       => "Parisi",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 35,
                "name"       => "Patrocínio Paulista",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 35,
                "name"       => "Paulicéia",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 35,
                "name"       => "Paulínia",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 35,
                "name"       => "Paulistânia",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 35,
                "name"       => "Paulo de Faria",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 35,
                "name"       => "Pederneiras",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 35,
                "name"       => "Pedra Bela",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 35,
                "name"       => "Pedranópolis",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 35,
                "name"       => "Pedregulho",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 35,
                "name"       => "Pedreira",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 35,
                "name"       => "Pedrinhas Paulista",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 35,
                "name"       => "Pedro de Toledo",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 35,
                "name"       => "Penápolis",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 35,
                "name"       => "Pereira Barreto",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 35,
                "name"       => "Pereiras",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 35,
                "name"       => "Peruíbe",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 35,
                "name"       => "Piacatu",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 35,
                "name"       => "Piedade",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 35,
                "name"       => "Pilar do Sul",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 35,
                "name"       => "Pindamonhangaba",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 35,
                "name"       => "Pindorama",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 35,
                "name"       => "Pinhalzinho",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 35,
                "name"       => "Piquerobi",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 35,
                "name"       => "Piquete",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 35,
                "name"       => "Piracaia",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 35,
                "name"       => "Piracicaba",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 35,
                "name"       => "Piraju",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 35,
                "name"       => "Pirajuí",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 35,
                "name"       => "Pirangi",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 35,
                "name"       => "Pirapora do Bom Jesus",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 35,
                "name"       => "Pirapozinho",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 35,
                "name"       => "Pirassununga",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 35,
                "name"       => "Piratininga",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 35,
                "name"       => "Pitangueiras",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 35,
                "name"       => "Planalto",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 35,
                "name"       => "Platina",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 35,
                "name"       => "Poá",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 35,
                "name"       => "Poloni",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 35,
                "name"       => "Pompéia",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 35,
                "name"       => "Pongaí",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 35,
                "name"       => "Pontal",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 35,
                "name"       => "Pontalinda",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 35,
                "name"       => "Pontes Gestal",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 35,
                "name"       => "Populina",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 35,
                "name"       => "Porangaba",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 35,
                "name"       => "Porto Feliz",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 35,
                "name"       => "Porto Ferreira",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 35,
                "name"       => "Potim",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 35,
                "name"       => "Potirendaba",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 35,
                "name"       => "Pracinha",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 35,
                "name"       => "Pradópolis",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 35,
                "name"       => "Praia Grande",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 35,
                "name"       => "Pratânia",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 35,
                "name"       => "Presidente Alves",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 35,
                "name"       => "Presidente Bernardes",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 35,
                "name"       => "Presidente Epitácio",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 35,
                "name"       => "Presidente Prudente",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 35,
                "name"       => "Presidente Venceslau",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 35,
                "name"       => "Promissão",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 35,
                "name"       => "Quadra",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 35,
                "name"       => "Quatá",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 35,
                "name"       => "Queiroz",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 35,
                "name"       => "Queluz",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 35,
                "name"       => "Quintana",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 35,
                "name"       => "Rafard",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 35,
                "name"       => "Rancharia",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 35,
                "name"       => "Redenção da Serra",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 35,
                "name"       => "Regente Feijó",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 35,
                "name"       => "Reginópolis",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 35,
                "name"       => "Registro",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 35,
                "name"       => "Restinga",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 35,
                "name"       => "Ribeira",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 35,
                "name"       => "Ribeirão Bonito",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 35,
                "name"       => "Ribeirão Branco",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 35,
                "name"       => "Ribeirão Corrente",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 35,
                "name"       => "Ribeirão do Sul",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 35,
                "name"       => "Ribeirão dos Índios",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 35,
                "name"       => "Ribeirão Grande",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 35,
                "name"       => "Ribeirão Pires",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 35,
                "name"       => "Ribeirão Preto",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 35,
                "name"       => "Riversul",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 35,
                "name"       => "Rifaina",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 35,
                "name"       => "Rincão",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 35,
                "name"       => "Rinópolis",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 35,
                "name"       => "Rio Claro",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 35,
                "name"       => "Rio das Pedras",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 35,
                "name"       => "Rio Grande da Serra",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 35,
                "name"       => "Riolândia",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 35,
                "name"       => "Rosana",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 35,
                "name"       => "Roseira",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 35,
                "name"       => "Rubiácea",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 35,
                "name"       => "Rubinéia",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 35,
                "name"       => "Sabino",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 35,
                "name"       => "Sagres",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 35,
                "name"       => "Sales",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 35,
                "name"       => "Sales Oliveira",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 35,
                "name"       => "Salesópolis",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 35,
                "name"       => "Salmourão",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 35,
                "name"       => "Saltinho",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 35,
                "name"       => "Salto",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 35,
                "name"       => "Salto de Pirapora",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 35,
                "name"       => "Salto Grande",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 35,
                "name"       => "Sandovalina",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 35,
                "name"       => "Santa Adélia",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 35,
                "name"       => "Santa Albertina",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 35,
                "name"       => "Santa Bárbara d`Oeste",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 35,
                "name"       => "Santa Branca",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 35,
                "name"       => "Santa Clara d`Oeste",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 35,
                "name"       => "Santa Cruz da Conceição",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 35,
                "name"       => "Santa Cruz da Esperança",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 35,
                "name"       => "Santa Cruz das Palmeiras",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 35,
                "name"       => "Santa Cruz do Rio Pardo",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 35,
                "name"       => "Santa Ernestina",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 35,
                "name"       => "Santa Fé do Sul",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 35,
                "name"       => "Santa Gertrudes",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 35,
                "name"       => "Santa Isabel",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 35,
                "name"       => "Santa Lúcia",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 35,
                "name"       => "Santa Maria da Serra",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 35,
                "name"       => "Santa Mercedes",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 35,
                "name"       => "Santana da Ponte Pensa",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 35,
                "name"       => "Santana de Parnaíba",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 35,
                "name"       => "Santa Rita d`Oeste",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 35,
                "name"       => "Santa Rita do Passa Quatro",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 35,
                "name"       => "Santa Rosa de Viterbo",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 35,
                "name"       => "Santa Salete",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 35,
                "name"       => "Santo Anastácio",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 35,
                "name"       => "Santo André",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 35,
                "name"       => "Santo Antônio da Alegria",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 35,
                "name"       => "Santo Antônio de Posse",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 35,
                "name"       => "Santo Antônio do Aracanguá",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 35,
                "name"       => "Santo Antônio do Jardim",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 35,
                "name"       => "Santo Antônio do Pinhal",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 35,
                "name"       => "Santo Expedito",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 35,
                "name"       => "Santópolis do Aguapeí",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 35,
                "name"       => "Santos",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 35,
                "name"       => "São Bento do Sapucaí",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 35,
                "name"       => "São Bernardo do Campo",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 35,
                "name"       => "São Caetano do Sul",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 35,
                "name"       => "São Carlos",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 35,
                "name"       => "São Francisco",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 35,
                "name"       => "São João da Boa Vista",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 35,
                "name"       => "São João das Duas Pontes",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 35,
                "name"       => "São João de Iracema",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 35,
                "name"       => "São João do Pau d`Alho",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 35,
                "name"       => "São Joaquim da Barra",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 35,
                "name"       => "São José da Bela Vista",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 35,
                "name"       => "São José do Barreiro",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 35,
                "name"       => "São José do Rio Pardo",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 35,
                "name"       => "São José do Rio Preto",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 35,
                "name"       => "São José dos Campos",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 35,
                "name"       => "São Lourenço da Serra",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 35,
                "name"       => "São Luís do Paraitinga",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 35,
                "name"       => "São Manuel",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 35,
                "name"       => "São Miguel Arcanjo",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 35,
                "name"       => "São Paulo",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 35,
                "name"       => "São Pedro",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 35,
                "name"       => "São Pedro do Turvo",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 35,
                "name"       => "São Roque",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 35,
                "name"       => "São Sebastião",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 35,
                "name"       => "São Sebastião da Grama",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 35,
                "name"       => "São Simão",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 35,
                "name"       => "São Vicente",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 35,
                "name"       => "Sarapuí",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 35,
                "name"       => "Sarutaiá",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 35,
                "name"       => "Sebastianópolis do Sul",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 35,
                "name"       => "Serra Azul",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 35,
                "name"       => "Serrana",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 35,
                "name"       => "Serra Negra",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 35,
                "name"       => "Sertãozinho",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 35,
                "name"       => "Sete Barras",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 35,
                "name"       => "Severínia",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 35,
                "name"       => "Silveiras",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 35,
                "name"       => "Socorro",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 35,
                "name"       => "Sorocaba",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 35,
                "name"       => "Sud Mennucci",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 35,
                "name"       => "Sumaré",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 35,
                "name"       => "Suzano",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 35,
                "name"       => "Suzanápolis",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 35,
                "name"       => "Tabapuã",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 35,
                "name"       => "Tabatinga",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 35,
                "name"       => "Taboão da Serra",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 35,
                "name"       => "Taciba",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 35,
                "name"       => "Taguaí",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 35,
                "name"       => "Taiaçu",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 35,
                "name"       => "Taiúva",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 35,
                "name"       => "Tambaú",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 35,
                "name"       => "Tanabi",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 35,
                "name"       => "Tapiraí",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 35,
                "name"       => "Tapiratiba",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 35,
                "name"       => "Taquaral",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 35,
                "name"       => "Taquaritinga",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 35,
                "name"       => "Taquarituba",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 35,
                "name"       => "Taquarivaí",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 35,
                "name"       => "Tarabai",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 35,
                "name"       => "Tarumã",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 35,
                "name"       => "Tatuí",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 35,
                "name"       => "Taubaté",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 35,
                "name"       => "Tejupá",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 35,
                "name"       => "Teodoro Sampaio",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 35,
                "name"       => "Terra Roxa",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 35,
                "name"       => "Tietê",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 35,
                "name"       => "Timburi",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 35,
                "name"       => "Torre de Pedra",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 35,
                "name"       => "Torrinha",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 35,
                "name"       => "Trabiju",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 35,
                "name"       => "Tremembé",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 35,
                "name"       => "Três Fronteiras",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 35,
                "name"       => "Tuiuti",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 35,
                "name"       => "Tupã",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 35,
                "name"       => "Tupi Paulista",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 35,
                "name"       => "Turiúba",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 35,
                "name"       => "Turmalina",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 35,
                "name"       => "Ubarana",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 35,
                "name"       => "Ubatuba",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 35,
                "name"       => "Ubirajara",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 35,
                "name"       => "Uchoa",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 35,
                "name"       => "União Paulista",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 35,
                "name"       => "Urânia",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 35,
                "name"       => "Uru",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 35,
                "name"       => "Urupês",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 35,
                "name"       => "Valentim Gentil",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 35,
                "name"       => "Valinhos",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 35,
                "name"       => "Valparaíso",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 35,
                "name"       => "Vargem",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 35,
                "name"       => "Vargem Grande do Sul",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 35,
                "name"       => "Vargem Grande Paulista",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 35,
                "name"       => "Várzea Paulista",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 35,
                "name"       => "Vera Cruz",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 35,
                "name"       => "Vinhedo",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 35,
                "name"       => "Viradouro",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 35,
                "name"       => "Vista Alegre do Alto",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 35,
                "name"       => "Vitória Brasil",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 35,
                "name"       => "Votorantim",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 35,
                "name"       => "Votuporanga",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 35,
                "name"       => "Zacarias",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 35,
                "name"       => "Chavantes",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 35,
                "name"       => "Estiva Gerbi",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 41,
                "name"       => "Abatiá",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 41,
                "name"       => "Adrianópolis",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 41,
                "name"       => "Agudos do Sul",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 41,
                "name"       => "Almirante Tamandaré",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 41,
                "name"       => "Altamira do Paraná",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 41,
                "name"       => "Altônia",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 41,
                "name"       => "Alto Paraná",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 41,
                "name"       => "Alto Piquiri",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 41,
                "name"       => "Alvorada do Sul",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 41,
                "name"       => "Amaporã",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 41,
                "name"       => "Ampére",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 41,
                "name"       => "Anahy",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 41,
                "name"       => "Andirá",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 41,
                "name"       => "Ângulo",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 41,
                "name"       => "Antonina",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 41,
                "name"       => "Antônio Olinto",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 41,
                "name"       => "Apucarana",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 41,
                "name"       => "Arapongas",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 41,
                "name"       => "Arapoti",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 41,
                "name"       => "Arapuã",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 41,
                "name"       => "Araruna",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 41,
                "name"       => "Araucária",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 41,
                "name"       => "Ariranha do Ivaí",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 41,
                "name"       => "Assaí",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 41,
                "name"       => "Assis Chateaubriand",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 41,
                "name"       => "Astorga",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 41,
                "name"       => "Atalaia",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 41,
                "name"       => "Balsa Nova",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 41,
                "name"       => "Bandeirantes",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 41,
                "name"       => "Barbosa Ferraz",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 41,
                "name"       => "Barracão",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 41,
                "name"       => "Barra do Jacaré",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 41,
                "name"       => "Bela Vista da Caroba",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 41,
                "name"       => "Bela Vista do Paraíso",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 41,
                "name"       => "Bituruna",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 41,
                "name"       => "Boa Esperança",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 41,
                "name"       => "Boa Esperança do Iguaçu",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 41,
                "name"       => "Boa Ventura de São Roque",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 41,
                "name"       => "Boa Vista da Aparecida",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 41,
                "name"       => "Bocaiúva do Sul",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 41,
                "name"       => "Bom Jesus do Sul",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 41,
                "name"       => "Bom Sucesso",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 41,
                "name"       => "Bom Sucesso do Sul",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 41,
                "name"       => "Borrazópolis",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 41,
                "name"       => "Braganey",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 41,
                "name"       => "Brasilândia do Sul",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 41,
                "name"       => "Cafeara",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 41,
                "name"       => "Cafelândia",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 41,
                "name"       => "Cafezal do Sul",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 41,
                "name"       => "Califórnia",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 41,
                "name"       => "Cambará",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 41,
                "name"       => "Cambé",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 41,
                "name"       => "Cambira",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 41,
                "name"       => "Campina da Lagoa",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 41,
                "name"       => "Campina do Simão",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 41,
                "name"       => "Campina Grande do Sul",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 41,
                "name"       => "Campo Bonito",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 41,
                "name"       => "Campo do Tenente",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 41,
                "name"       => "Campo Largo",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 41,
                "name"       => "Campo Magro",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 41,
                "name"       => "Campo Mourão",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 41,
                "name"       => "Cândido de Abreu",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 41,
                "name"       => "Candói",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 41,
                "name"       => "Cantagalo",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 41,
                "name"       => "Capanema",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 41,
                "name"       => "Capitão Leônidas Marques",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 41,
                "name"       => "Carambeí",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 41,
                "name"       => "Carlópolis",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 41,
                "name"       => "Cascavel",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 41,
                "name"       => "Castro",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 41,
                "name"       => "Catanduvas",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 41,
                "name"       => "Centenário do Sul",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 41,
                "name"       => "Cerro Azul",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 41,
                "name"       => "Céu Azul",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 41,
                "name"       => "Chopinzinho",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 41,
                "name"       => "Cianorte",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 41,
                "name"       => "Cidade Gaúcha",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 41,
                "name"       => "Clevelândia",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 41,
                "name"       => "Colombo",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 41,
                "name"       => "Colorado",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 41,
                "name"       => "Congonhinhas",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 41,
                "name"       => "Conselheiro Mairinck",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 41,
                "name"       => "Contenda",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 41,
                "name"       => "Corbélia",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 41,
                "name"       => "Cornélio Procópio",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 41,
                "name"       => "Coronel Domingos Soares",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 41,
                "name"       => "Coronel Vivida",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 41,
                "name"       => "Corumbataí do Sul",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 41,
                "name"       => "Cruzeiro do Iguaçu",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 41,
                "name"       => "Cruzeiro do Oeste",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 41,
                "name"       => "Cruzeiro do Sul",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 41,
                "name"       => "Cruz Machado",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 41,
                "name"       => "Cruzmaltina",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 41,
                "name"       => "Curitiba",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 41,
                "name"       => "Curiúva",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 41,
                "name"       => "Diamante do Norte",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 41,
                "name"       => "Diamante do Sul",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 41,
                "name"       => "Diamante d`Oeste",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 41,
                "name"       => "Dois Vizinhos",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 41,
                "name"       => "Douradina",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 41,
                "name"       => "Doutor Camargo",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 41,
                "name"       => "Enéas Marques",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 41,
                "name"       => "Engenheiro Beltrão",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 41,
                "name"       => "Esperança Nova",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 41,
                "name"       => "Entre Rios do Oeste",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 41,
                "name"       => "Espigão Alto do Iguaçu",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 41,
                "name"       => "Farol",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 41,
                "name"       => "Faxinal",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 41,
                "name"       => "Fazenda Rio Grande",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 41,
                "name"       => "Fênix",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 41,
                "name"       => "Fernandes Pinheiro",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 41,
                "name"       => "Figueira",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 41,
                "name"       => "Floraí",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 41,
                "name"       => "Flor da Serra do Sul",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 41,
                "name"       => "Floresta",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 41,
                "name"       => "Florestópolis",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 41,
                "name"       => "Flórida",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 41,
                "name"       => "Formosa do Oeste",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 41,
                "name"       => "Foz do Iguaçu",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 41,
                "name"       => "Francisco Alves",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 41,
                "name"       => "Francisco Beltrão",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 41,
                "name"       => "Foz do Jordão",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 41,
                "name"       => "General Carneiro",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 41,
                "name"       => "Godoy Moreira",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 41,
                "name"       => "Goioerê",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 41,
                "name"       => "Goioxim",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 41,
                "name"       => "Grandes Rios",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 41,
                "name"       => "Guaíra",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 41,
                "name"       => "Guairaçá",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 41,
                "name"       => "Guamiranga",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 41,
                "name"       => "Guapirama",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 41,
                "name"       => "Guaporema",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 41,
                "name"       => "Guaraci",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 41,
                "name"       => "Guaraniaçu",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 41,
                "name"       => "Guarapuava",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 41,
                "name"       => "Guaraqueçaba",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 41,
                "name"       => "Guaratuba",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 41,
                "name"       => "Honório Serpa",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 41,
                "name"       => "Ibaiti",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 41,
                "name"       => "Ibema",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 41,
                "name"       => "Ibiporã",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 41,
                "name"       => "Icaraíma",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 41,
                "name"       => "Iguaraçu",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 41,
                "name"       => "Iguatu",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 41,
                "name"       => "Imbaú",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 41,
                "name"       => "Imbituva",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 41,
                "name"       => "Inácio Martins",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 41,
                "name"       => "Inajá",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 41,
                "name"       => "Indianópolis",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 41,
                "name"       => "Ipiranga",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 41,
                "name"       => "Iporã",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 41,
                "name"       => "Iracema do Oeste",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 41,
                "name"       => "Irati",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 41,
                "name"       => "Iretama",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 41,
                "name"       => "Itaguajé",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 41,
                "name"       => "Itaipulândia",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 41,
                "name"       => "Itambaracá",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 41,
                "name"       => "Itambé",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 41,
                "name"       => "Itapejara d`Oeste",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 41,
                "name"       => "Itaperuçu",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 41,
                "name"       => "Itaúna do Sul",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 41,
                "name"       => "Ivaí",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 41,
                "name"       => "Ivaiporã",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 41,
                "name"       => "Ivaté",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 41,
                "name"       => "Ivatuba",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 41,
                "name"       => "Jaboti",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 41,
                "name"       => "Jacarezinho",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 41,
                "name"       => "Jaguapitã",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 41,
                "name"       => "Jaguariaíva",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 41,
                "name"       => "Jandaia do Sul",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 41,
                "name"       => "Janiópolis",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 41,
                "name"       => "Japira",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 41,
                "name"       => "Japurá",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 41,
                "name"       => "Jardim Alegre",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 41,
                "name"       => "Jardim Olinda",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 41,
                "name"       => "Jataizinho",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 41,
                "name"       => "Jesuítas",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 41,
                "name"       => "Joaquim Távora",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 41,
                "name"       => "Jundiaí do Sul",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 41,
                "name"       => "Juranda",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 41,
                "name"       => "Jussara",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 41,
                "name"       => "Kaloré",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 41,
                "name"       => "Lapa",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 41,
                "name"       => "Laranjal",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 41,
                "name"       => "Laranjeiras do Sul",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 41,
                "name"       => "Leópolis",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 41,
                "name"       => "Lidianópolis",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 41,
                "name"       => "Lindoeste",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 41,
                "name"       => "Loanda",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 41,
                "name"       => "Lobato",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 41,
                "name"       => "Londrina",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 41,
                "name"       => "Luiziana",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 41,
                "name"       => "Lunardelli",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 41,
                "name"       => "Lupionópolis",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 41,
                "name"       => "Mallet",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 41,
                "name"       => "Mamborê",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 41,
                "name"       => "Mandaguaçu",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 41,
                "name"       => "Mandaguari",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 41,
                "name"       => "Mandirituba",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 41,
                "name"       => "Manfrinópolis",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 41,
                "name"       => "Mangueirinha",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 41,
                "name"       => "Manoel Ribas",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 41,
                "name"       => "Marechal Cândido Rondon",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 41,
                "name"       => "Maria Helena",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 41,
                "name"       => "Marialva",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 41,
                "name"       => "Marilândia do Sul",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 41,
                "name"       => "Marilena",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 41,
                "name"       => "Mariluz",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 41,
                "name"       => "Maringá",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 41,
                "name"       => "Mariópolis",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 41,
                "name"       => "Maripá",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 41,
                "name"       => "Marmeleiro",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 41,
                "name"       => "Marquinho",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 41,
                "name"       => "Marumbi",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 41,
                "name"       => "Matelândia",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 41,
                "name"       => "Matinhos",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 41,
                "name"       => "Mato Rico",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 41,
                "name"       => "Mauá da Serra",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 41,
                "name"       => "Medianeira",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 41,
                "name"       => "Mercedes",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 41,
                "name"       => "Mirador",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 41,
                "name"       => "Miraselva",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 41,
                "name"       => "Missal",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 41,
                "name"       => "Moreira Sales",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 41,
                "name"       => "Morretes",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 41,
                "name"       => "Munhoz de Melo",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 41,
                "name"       => "Nossa Senhora das Graças",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 41,
                "name"       => "Nova Aliança do Ivaí",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 41,
                "name"       => "Nova América da Colina",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 41,
                "name"       => "Nova Aurora",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 41,
                "name"       => "Nova Cantu",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 41,
                "name"       => "Nova Esperança",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 41,
                "name"       => "Nova Esperança do Sudoeste",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 41,
                "name"       => "Nova Fátima",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 41,
                "name"       => "Nova Laranjeiras",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 41,
                "name"       => "Nova Londrina",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 41,
                "name"       => "Nova Olímpia",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 41,
                "name"       => "Nova Santa Bárbara",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 41,
                "name"       => "Nova Santa Rosa",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 41,
                "name"       => "Nova Prata do Iguaçu",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 41,
                "name"       => "Nova Tebas",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 41,
                "name"       => "Novo Itacolomi",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 41,
                "name"       => "Ortigueira",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 41,
                "name"       => "Ourizona",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 41,
                "name"       => "Ouro Verde do Oeste",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 41,
                "name"       => "Paiçandu",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 41,
                "name"       => "Palmas",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 41,
                "name"       => "Palmeira",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 41,
                "name"       => "Palmital",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 41,
                "name"       => "Palotina",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 41,
                "name"       => "Paraíso do Norte",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 41,
                "name"       => "Paranacity",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 41,
                "name"       => "Paranaguá",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 41,
                "name"       => "Paranapoema",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 41,
                "name"       => "Paranavaí",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 41,
                "name"       => "Pato Bragado",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 41,
                "name"       => "Pato Branco",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 41,
                "name"       => "Paula Freitas",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 41,
                "name"       => "Paulo Frontin",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 41,
                "name"       => "Peabiru",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 41,
                "name"       => "Perobal",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 41,
                "name"       => "Pérola",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 41,
                "name"       => "Pérola d`Oeste",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 41,
                "name"       => "Piên",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 41,
                "name"       => "Pinhais",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 41,
                "name"       => "Pinhalão",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 41,
                "name"       => "Pinhal de São Bento",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 41,
                "name"       => "Pinhão",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 41,
                "name"       => "Piraí do Sul",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 41,
                "name"       => "Piraquara",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 41,
                "name"       => "Pitanga",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 41,
                "name"       => "Pitangueiras",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 41,
                "name"       => "Planaltina do Paraná",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 41,
                "name"       => "Planalto",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 41,
                "name"       => "Ponta Grossa",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 41,
                "name"       => "Pontal do Paraná",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 41,
                "name"       => "Porecatu",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 41,
                "name"       => "Porto Amazonas",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 41,
                "name"       => "Porto Barreiro",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 41,
                "name"       => "Porto Rico",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 41,
                "name"       => "Porto Vitória",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 41,
                "name"       => "Prado Ferreira",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 41,
                "name"       => "Pranchita",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 41,
                "name"       => "Presidente Castelo Branco",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 41,
                "name"       => "Primeiro de Maio",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 41,
                "name"       => "Prudentópolis",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 41,
                "name"       => "Quarto Centenário",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 41,
                "name"       => "Quatiguá",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 41,
                "name"       => "Quatro Barras",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 41,
                "name"       => "Quatro Pontes",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 41,
                "name"       => "Quedas do Iguaçu",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 41,
                "name"       => "Querência do Norte",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 41,
                "name"       => "Quinta do Sol",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 41,
                "name"       => "Quitandinha",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 41,
                "name"       => "Ramilândia",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 41,
                "name"       => "Rancho Alegre",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 41,
                "name"       => "Rancho Alegre d`Oeste",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 41,
                "name"       => "Realeza",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 41,
                "name"       => "Rebouças",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 41,
                "name"       => "Renascença",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 41,
                "name"       => "Reserva",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 41,
                "name"       => "Reserva do Iguaçu",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 41,
                "name"       => "Ribeirão Claro",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 41,
                "name"       => "Ribeirão do Pinhal",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 41,
                "name"       => "Rio Azul",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 41,
                "name"       => "Rio Bom",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 41,
                "name"       => "Rio Bonito do Iguaçu",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 41,
                "name"       => "Rio Branco do Ivaí",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 41,
                "name"       => "Rio Branco do Sul",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 41,
                "name"       => "Rio Negro",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 41,
                "name"       => "Rolândia",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 41,
                "name"       => "Roncador",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 41,
                "name"       => "Rondon",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 41,
                "name"       => "Rosário do Ivaí",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 41,
                "name"       => "Sabáudia",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 41,
                "name"       => "Salgado Filho",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 41,
                "name"       => "Salto do Itararé",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 41,
                "name"       => "Salto do Lontra",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 41,
                "name"       => "Santa Amélia",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 41,
                "name"       => "Santa Cecília do Pavão",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 41,
                "name"       => "Santa Cruz de Monte Castelo",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 41,
                "name"       => "Santa Fé",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 41,
                "name"       => "Santa Helena",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 41,
                "name"       => "Santa Inês",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 41,
                "name"       => "Santa Isabel do Ivaí",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 41,
                "name"       => "Santa Izabel do Oeste",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 41,
                "name"       => "Santa Lúcia",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 41,
                "name"       => "Santa Maria do Oeste",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 41,
                "name"       => "Santa Mariana",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 41,
                "name"       => "Santa Mônica",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 41,
                "name"       => "Santana do Itararé",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 41,
                "name"       => "Santa Tereza do Oeste",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 41,
                "name"       => "Santa Terezinha de Itaipu",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 41,
                "name"       => "Santo Antônio da Platina",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 41,
                "name"       => "Santo Antônio do Caiuá",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 41,
                "name"       => "Santo Antônio do Paraíso",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 41,
                "name"       => "Santo Antônio do Sudoeste",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 41,
                "name"       => "Santo Inácio",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 41,
                "name"       => "São Carlos do Ivaí",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 41,
                "name"       => "São Jerônimo da Serra",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 41,
                "name"       => "São João",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 41,
                "name"       => "São João do Caiuá",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 41,
                "name"       => "São João do Ivaí",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 41,
                "name"       => "São João do Triunfo",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 41,
                "name"       => "São Jorge d`Oeste",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 41,
                "name"       => "São Jorge do Ivaí",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 41,
                "name"       => "São Jorge do Patrocínio",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 41,
                "name"       => "São José da Boa Vista",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 41,
                "name"       => "São José das Palmeiras",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 41,
                "name"       => "São José dos Pinhais",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 41,
                "name"       => "São Manoel do Paraná",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 41,
                "name"       => "São Mateus do Sul",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 41,
                "name"       => "São Miguel do Iguaçu",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 41,
                "name"       => "São Pedro do Iguaçu",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 41,
                "name"       => "São Pedro do Ivaí",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 41,
                "name"       => "São Pedro do Paraná",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 41,
                "name"       => "São Sebastião da Amoreira",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 41,
                "name"       => "São Tomé",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 41,
                "name"       => "Sapopema",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 41,
                "name"       => "Sarandi",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 41,
                "name"       => "Saudade do Iguaçu",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 41,
                "name"       => "Sengés",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 41,
                "name"       => "Serranópolis do Iguaçu",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 41,
                "name"       => "Sertaneja",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 41,
                "name"       => "Sertanópolis",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 41,
                "name"       => "Siqueira Campos",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 41,
                "name"       => "Sulina",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 41,
                "name"       => "Tamarana",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 41,
                "name"       => "Tamboara",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 41,
                "name"       => "Tapejara",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 41,
                "name"       => "Tapira",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 41,
                "name"       => "Teixeira Soares",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 41,
                "name"       => "Telêmaco Borba",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 41,
                "name"       => "Terra Boa",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 41,
                "name"       => "Terra Rica",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 41,
                "name"       => "Terra Roxa",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 41,
                "name"       => "Tibagi",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 41,
                "name"       => "Tijucas do Sul",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 41,
                "name"       => "Toledo",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 41,
                "name"       => "Tomazina",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 41,
                "name"       => "Três Barras do Paraná",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 41,
                "name"       => "Tunas do Paraná",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 41,
                "name"       => "Tuneiras do Oeste",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 41,
                "name"       => "Tupãssi",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 41,
                "name"       => "Turvo",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 41,
                "name"       => "Ubiratã",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 41,
                "name"       => "Umuarama",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 41,
                "name"       => "União da Vitória",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 41,
                "name"       => "Uniflor",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 41,
                "name"       => "Uraí",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 41,
                "name"       => "Wenceslau Braz",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 41,
                "name"       => "Ventania",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 41,
                "name"       => "Vera Cruz do Oeste",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 41,
                "name"       => "Verê",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 41,
                "name"       => "Alto Paraíso",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 41,
                "name"       => "Doutor Ulysses",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 41,
                "name"       => "Virmond",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 41,
                "name"       => "Vitorino",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 41,
                "name"       => "Xambrê",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 42,
                "name"       => "Abdon Batista",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 42,
                "name"       => "Abelardo Luz",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 42,
                "name"       => "Agrolândia",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 42,
                "name"       => "Agronômica",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 42,
                "name"       => "Água Doce",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 42,
                "name"       => "Águas de Chapecó",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 42,
                "name"       => "Águas Frias",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 42,
                "name"       => "Águas Mornas",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 42,
                "name"       => "Alfredo Wagner",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 42,
                "name"       => "Alto Bela Vista",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 42,
                "name"       => "Anchieta",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 42,
                "name"       => "Angelina",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 42,
                "name"       => "Anita Garibaldi",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 42,
                "name"       => "Anitápolis",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 42,
                "name"       => "Antônio Carlos",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 42,
                "name"       => "Apiúna",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 42,
                "name"       => "Arabutã",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 42,
                "name"       => "Araquari",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 42,
                "name"       => "Araranguá",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 42,
                "name"       => "Armazém",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 42,
                "name"       => "Arroio Trinta",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 42,
                "name"       => "Arvoredo",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 42,
                "name"       => "Ascurra",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 42,
                "name"       => "Atalanta",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 42,
                "name"       => "Aurora",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 42,
                "name"       => "Balneário Arroio do Silva",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 42,
                "name"       => "Balneário Camboriú",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 42,
                "name"       => "Balneário Barra do Sul",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 42,
                "name"       => "Balneário Gaivota",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 42,
                "name"       => "Bandeirante",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 42,
                "name"       => "Barra Bonita",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 42,
                "name"       => "Barra Velha",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 42,
                "name"       => "Bela Vista do Toldo",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 42,
                "name"       => "Belmonte",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 42,
                "name"       => "Benedito Novo",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 42,
                "name"       => "Biguaçu",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 42,
                "name"       => "Blumenau",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 42,
                "name"       => "Bocaina do Sul",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 42,
                "name"       => "Bombinhas",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 42,
                "name"       => "Bom Jardim da Serra",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 42,
                "name"       => "Bom Jesus",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 42,
                "name"       => "Bom Jesus do Oeste",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 42,
                "name"       => "Bom Retiro",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 42,
                "name"       => "Botuverá",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 42,
                "name"       => "Braço do Norte",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 42,
                "name"       => "Braço do Trombudo",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 42,
                "name"       => "Brunópolis",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 42,
                "name"       => "Brusque",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 42,
                "name"       => "Caçador",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 42,
                "name"       => "Caibi",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 42,
                "name"       => "Calmon",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 42,
                "name"       => "Camboriú",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 42,
                "name"       => "Capão Alto",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 42,
                "name"       => "Campo Alegre",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 42,
                "name"       => "Campo Belo do Sul",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 42,
                "name"       => "Campo Erê",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 42,
                "name"       => "Campos Novos",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 42,
                "name"       => "Canelinha",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 42,
                "name"       => "Canoinhas",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 42,
                "name"       => "Capinzal",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 42,
                "name"       => "Capivari de Baixo",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 42,
                "name"       => "Catanduvas",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 42,
                "name"       => "Caxambu do Sul",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 42,
                "name"       => "Celso Ramos",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 42,
                "name"       => "Cerro Negro",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 42,
                "name"       => "Chapadão do Lageado",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 42,
                "name"       => "Chapecó",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 42,
                "name"       => "Cocal do Sul",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 42,
                "name"       => "Concórdia",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 42,
                "name"       => "Cordilheira Alta",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 42,
                "name"       => "Coronel Freitas",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 42,
                "name"       => "Coronel Martins",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 42,
                "name"       => "Corupá",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 42,
                "name"       => "Correia Pinto",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 42,
                "name"       => "Criciúma",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 42,
                "name"       => "Cunha Porã",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 42,
                "name"       => "Cunhataí",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 42,
                "name"       => "Curitibanos",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 42,
                "name"       => "Descanso",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 42,
                "name"       => "Dionísio Cerqueira",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 42,
                "name"       => "Dona Emma",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 42,
                "name"       => "Doutor Pedrinho",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 42,
                "name"       => "Entre Rios",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 42,
                "name"       => "Ermo",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 42,
                "name"       => "Erval Velho",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 42,
                "name"       => "Faxinal dos Guedes",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 42,
                "name"       => "Flor do Sertão",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 42,
                "name"       => "Florianópolis",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 42,
                "name"       => "Formosa do Sul",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 42,
                "name"       => "Forquilhinha",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 42,
                "name"       => "Fraiburgo",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 42,
                "name"       => "Frei Rogério",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 42,
                "name"       => "Galvão",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 42,
                "name"       => "Garopaba",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 42,
                "name"       => "Garuva",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 42,
                "name"       => "Gaspar",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 42,
                "name"       => "Governador Celso Ramos",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 42,
                "name"       => "Grão Pará",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 42,
                "name"       => "Gravatal",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 42,
                "name"       => "Guabiruba",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 42,
                "name"       => "Guaraciaba",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 42,
                "name"       => "Guaramirim",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 42,
                "name"       => "Guarujá do Sul",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 42,
                "name"       => "Guatambú",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 42,
                "name"       => "Herval d`Oeste",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 42,
                "name"       => "Ibiam",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 42,
                "name"       => "Ibicaré",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 42,
                "name"       => "Ibirama",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 42,
                "name"       => "Içara",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 42,
                "name"       => "Ilhota",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 42,
                "name"       => "Imaruí",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 42,
                "name"       => "Imbituba",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 42,
                "name"       => "Imbuia",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 42,
                "name"       => "Indaial",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 42,
                "name"       => "Iomerê",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 42,
                "name"       => "Ipira",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 42,
                "name"       => "Iporã do Oeste",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 42,
                "name"       => "Ipuaçu",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 42,
                "name"       => "Ipumirim",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 42,
                "name"       => "Iraceminha",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 42,
                "name"       => "Irani",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 42,
                "name"       => "Irati",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 42,
                "name"       => "Irineópolis",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 42,
                "name"       => "Itá",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 42,
                "name"       => "Itaiópolis",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 42,
                "name"       => "Itajaí",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 42,
                "name"       => "Itapema",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 42,
                "name"       => "Itapiranga",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 42,
                "name"       => "Itapoá",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 42,
                "name"       => "Ituporanga",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 42,
                "name"       => "Jaborá",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 42,
                "name"       => "Jacinto Machado",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 42,
                "name"       => "Jaguaruna",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 42,
                "name"       => "Jaraguá do Sul",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 42,
                "name"       => "Jardinópolis",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 42,
                "name"       => "Joaçaba",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 42,
                "name"       => "Joinville",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 42,
                "name"       => "José Boiteux",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 42,
                "name"       => "Jupiá",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 42,
                "name"       => "Lacerdópolis",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 42,
                "name"       => "Lages",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 42,
                "name"       => "Laguna",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 42,
                "name"       => "Lajeado Grande",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 42,
                "name"       => "Laurentino",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 42,
                "name"       => "Lauro Muller",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 42,
                "name"       => "Lebon Régis",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 42,
                "name"       => "Leoberto Leal",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 42,
                "name"       => "Lindóia do Sul",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 42,
                "name"       => "Lontras",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 42,
                "name"       => "Luiz Alves",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 42,
                "name"       => "Luzerna",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 42,
                "name"       => "Macieira",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 42,
                "name"       => "Mafra",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 42,
                "name"       => "Major Gercino",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 42,
                "name"       => "Major Vieira",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 42,
                "name"       => "Maracajá",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 42,
                "name"       => "Maravilha",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 42,
                "name"       => "Marema",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 42,
                "name"       => "Massaranduba",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 42,
                "name"       => "Matos Costa",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 42,
                "name"       => "Meleiro",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 42,
                "name"       => "Mirim Doce",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 42,
                "name"       => "Modelo",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 42,
                "name"       => "Mondaí",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 42,
                "name"       => "Monte Carlo",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 42,
                "name"       => "Monte Castelo",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 42,
                "name"       => "Morro da Fumaça",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 42,
                "name"       => "Morro Grande",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 42,
                "name"       => "Navegantes",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 42,
                "name"       => "Nova Erechim",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 42,
                "name"       => "Nova Itaberaba",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 42,
                "name"       => "Nova Trento",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 42,
                "name"       => "Nova Veneza",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 42,
                "name"       => "Novo Horizonte",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 42,
                "name"       => "Orleans",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 42,
                "name"       => "Otacílio Costa",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 42,
                "name"       => "Ouro",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 42,
                "name"       => "Ouro Verde",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 42,
                "name"       => "Paial",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 42,
                "name"       => "Painel",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 42,
                "name"       => "Palhoça",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 42,
                "name"       => "Palma Sola",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 42,
                "name"       => "Palmeira",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 42,
                "name"       => "Palmitos",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 42,
                "name"       => "Papanduva",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 42,
                "name"       => "Paraíso",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 42,
                "name"       => "Passo de Torres",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 42,
                "name"       => "Passos Maia",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 42,
                "name"       => "Paulo Lopes",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 42,
                "name"       => "Pedras Grandes",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 42,
                "name"       => "Penha",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 42,
                "name"       => "Peritiba",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 42,
                "name"       => "Pescaria Brava",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 42,
                "name"       => "Petrolândia",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 42,
                "name"       => "Balneário Piçarras",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 42,
                "name"       => "Pinhalzinho",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 42,
                "name"       => "Pinheiro Preto",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 42,
                "name"       => "Piratuba",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 42,
                "name"       => "Planalto Alegre",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 42,
                "name"       => "Pomerode",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 42,
                "name"       => "Ponte Alta",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 42,
                "name"       => "Ponte Alta do Norte",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 42,
                "name"       => "Ponte Serrada",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 42,
                "name"       => "Porto Belo",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 42,
                "name"       => "Porto União",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 42,
                "name"       => "Pouso Redondo",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 42,
                "name"       => "Praia Grande",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 42,
                "name"       => "Presidente Castello Branco",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 42,
                "name"       => "Presidente Getúlio",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 42,
                "name"       => "Presidente Nereu",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 42,
                "name"       => "Princesa",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 42,
                "name"       => "Quilombo",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 42,
                "name"       => "Rancho Queimado",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 42,
                "name"       => "Rio das Antas",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 42,
                "name"       => "Rio do Campo",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 42,
                "name"       => "Rio do Oeste",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 42,
                "name"       => "Rio dos Cedros",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 42,
                "name"       => "Rio do Sul",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 42,
                "name"       => "Rio Fortuna",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 42,
                "name"       => "Rio Negrinho",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 42,
                "name"       => "Rio Rufino",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 42,
                "name"       => "Riqueza",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 42,
                "name"       => "Rodeio",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 42,
                "name"       => "Romelândia",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 42,
                "name"       => "Salete",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 42,
                "name"       => "Saltinho",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 42,
                "name"       => "Salto Veloso",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 42,
                "name"       => "Sangão",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 42,
                "name"       => "Santa Cecília",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 42,
                "name"       => "Santa Helena",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 42,
                "name"       => "Santa Rosa de Lima",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 42,
                "name"       => "Santa Rosa do Sul",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 42,
                "name"       => "Santa Terezinha",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 42,
                "name"       => "Santa Terezinha do Progresso",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 42,
                "name"       => "Santiago do Sul",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 42,
                "name"       => "Santo Amaro da Imperatriz",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 42,
                "name"       => "São Bernardino",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 42,
                "name"       => "São Bento do Sul",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 42,
                "name"       => "São Bonifácio",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 42,
                "name"       => "São Carlos",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 42,
                "name"       => "São Cristovão do Sul",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 42,
                "name"       => "São Domingos",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 42,
                "name"       => "São Francisco do Sul",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 42,
                "name"       => "São João do Oeste",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 42,
                "name"       => "São João Batista",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 42,
                "name"       => "São João do Itaperiú",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 42,
                "name"       => "São João do Sul",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 42,
                "name"       => "São Joaquim",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 42,
                "name"       => "São José",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 42,
                "name"       => "São José do Cedro",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 42,
                "name"       => "São José do Cerrito",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 42,
                "name"       => "São Lourenço do Oeste",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 42,
                "name"       => "São Ludgero",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 42,
                "name"       => "São Martinho",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 42,
                "name"       => "São Miguel da Boa Vista",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 42,
                "name"       => "São Miguel do Oeste",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 42,
                "name"       => "São Pedro de Alcântara",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 42,
                "name"       => "Saudades",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 42,
                "name"       => "Schroeder",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 42,
                "name"       => "Seara",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 42,
                "name"       => "Serra Alta",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 42,
                "name"       => "Siderópolis",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 42,
                "name"       => "Sombrio",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 42,
                "name"       => "Sul Brasil",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 42,
                "name"       => "Taió",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 42,
                "name"       => "Tangará",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 42,
                "name"       => "Tigrinhos",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 42,
                "name"       => "Tijucas",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 42,
                "name"       => "Timbé do Sul",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 42,
                "name"       => "Timbó",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 42,
                "name"       => "Timbó Grande",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 42,
                "name"       => "Três Barras",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 42,
                "name"       => "Treviso",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 42,
                "name"       => "Treze de Maio",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 42,
                "name"       => "Treze Tílias",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 42,
                "name"       => "Trombudo Central",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 42,
                "name"       => "Tubarão",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 42,
                "name"       => "Tunápolis",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 42,
                "name"       => "Turvo",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 42,
                "name"       => "União do Oeste",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 42,
                "name"       => "Urubici",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 42,
                "name"       => "Urupema",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 42,
                "name"       => "Urussanga",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 42,
                "name"       => "Vargeão",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 42,
                "name"       => "Vargem",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 42,
                "name"       => "Vargem Bonita",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 42,
                "name"       => "Vidal Ramos",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 42,
                "name"       => "Videira",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 42,
                "name"       => "Vitor Meireles",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 42,
                "name"       => "Witmarsum",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 42,
                "name"       => "Xanxerê",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 42,
                "name"       => "Xavantina",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 42,
                "name"       => "Xaxim",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 42,
                "name"       => "Zortéa",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 42,
                "name"       => "Balneário Rincão",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 43,
                "name"       => "Aceguá",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 43,
                "name"       => "Água Santa",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 43,
                "name"       => "Agudo",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 43,
                "name"       => "Ajuricaba",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 43,
                "name"       => "Alecrim",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 43,
                "name"       => "Alegrete",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 43,
                "name"       => "Alegria",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 43,
                "name"       => "Almirante Tamandaré do Sul",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 43,
                "name"       => "Alpestre",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 43,
                "name"       => "Alto Alegre",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 43,
                "name"       => "Alto Feliz",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 43,
                "name"       => "Alvorada",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 43,
                "name"       => "Amaral Ferrador",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 43,
                "name"       => "Ametista do Sul",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 43,
                "name"       => "André da Rocha",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 43,
                "name"       => "Anta Gorda",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 43,
                "name"       => "Antônio Prado",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 43,
                "name"       => "Arambaré",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 43,
                "name"       => "Araricá",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 43,
                "name"       => "Aratiba",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 43,
                "name"       => "Arroio do Meio",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 43,
                "name"       => "Arroio do Sal",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 43,
                "name"       => "Arroio do Padre",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 43,
                "name"       => "Arroio dos Ratos",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 43,
                "name"       => "Arroio do Tigre",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 43,
                "name"       => "Arroio Grande",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 43,
                "name"       => "Arvorezinha",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 43,
                "name"       => "Augusto Pestana",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 43,
                "name"       => "Áurea",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 43,
                "name"       => "Bagé",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 43,
                "name"       => "Balneário Pinhal",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 43,
                "name"       => "Barão",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 43,
                "name"       => "Barão de Cotegipe",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 43,
                "name"       => "Barão do Triunfo",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 43,
                "name"       => "Barracão",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 43,
                "name"       => "Barra do Guarita",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 43,
                "name"       => "Barra do Quaraí",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 43,
                "name"       => "Barra do Ribeiro",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 43,
                "name"       => "Barra do Rio Azul",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 43,
                "name"       => "Barra Funda",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 43,
                "name"       => "Barros Cassal",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 43,
                "name"       => "Benjamin Constant do Sul",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 43,
                "name"       => "Bento Gonçalves",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 43,
                "name"       => "Boa Vista das Missões",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 43,
                "name"       => "Boa Vista do Buricá",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 43,
                "name"       => "Boa Vista do Cadeado",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 43,
                "name"       => "Boa Vista do Incra",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 43,
                "name"       => "Boa Vista do Sul",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 43,
                "name"       => "Bom Jesus",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 43,
                "name"       => "Bom Princípio",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 43,
                "name"       => "Bom Progresso",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 43,
                "name"       => "Bom Retiro do Sul",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 43,
                "name"       => "Boqueirão do Leão",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 43,
                "name"       => "Bossoroca",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 43,
                "name"       => "Bozano",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 43,
                "name"       => "Braga",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 43,
                "name"       => "Brochier",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 43,
                "name"       => "Butiá",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 43,
                "name"       => "Caçapava do Sul",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 43,
                "name"       => "Cacequi",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 43,
                "name"       => "Cachoeira do Sul",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 43,
                "name"       => "Cachoeirinha",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 43,
                "name"       => "Cacique Doble",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 43,
                "name"       => "Caibaté",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 43,
                "name"       => "Caiçara",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 43,
                "name"       => "Camaquã",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 43,
                "name"       => "Camargo",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 43,
                "name"       => "Cambará do Sul",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 43,
                "name"       => "Campestre da Serra",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 43,
                "name"       => "Campina das Missões",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 43,
                "name"       => "Campinas do Sul",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 43,
                "name"       => "Campo Bom",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 43,
                "name"       => "Campo Novo",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 43,
                "name"       => "Campos Borges",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 43,
                "name"       => "Candelária",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 43,
                "name"       => "Cândido Godói",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 43,
                "name"       => "Candiota",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 43,
                "name"       => "Canela",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 43,
                "name"       => "Canguçu",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 43,
                "name"       => "Canoas",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 43,
                "name"       => "Canudos do Vale",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 43,
                "name"       => "Capão Bonito do Sul",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 43,
                "name"       => "Capão da Canoa",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 43,
                "name"       => "Capão do Cipó",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 43,
                "name"       => "Capão do Leão",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 43,
                "name"       => "Capivari do Sul",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 43,
                "name"       => "Capela de Santana",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 43,
                "name"       => "Capitão",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 43,
                "name"       => "Carazinho",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 43,
                "name"       => "Caraá",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 43,
                "name"       => "Carlos Barbosa",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 43,
                "name"       => "Carlos Gomes",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 43,
                "name"       => "Casca",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 43,
                "name"       => "Caseiros",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 43,
                "name"       => "Catuípe",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 43,
                "name"       => "Caxias do Sul",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 43,
                "name"       => "Centenário",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 43,
                "name"       => "Cerrito",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 43,
                "name"       => "Cerro Branco",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 43,
                "name"       => "Cerro Grande",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 43,
                "name"       => "Cerro Grande do Sul",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 43,
                "name"       => "Cerro Largo",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 43,
                "name"       => "Chapada",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 43,
                "name"       => "Charqueadas",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 43,
                "name"       => "Charrua",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 43,
                "name"       => "Chiapetta",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 43,
                "name"       => "Chuí",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 43,
                "name"       => "Chuvisca",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 43,
                "name"       => "Cidreira",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 43,
                "name"       => "Ciríaco",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 43,
                "name"       => "Colinas",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 43,
                "name"       => "Colorado",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 43,
                "name"       => "Condor",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 43,
                "name"       => "Constantina",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 43,
                "name"       => "Coqueiro Baixo",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 43,
                "name"       => "Coqueiros do Sul",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 43,
                "name"       => "Coronel Barros",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 43,
                "name"       => "Coronel Bicaco",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 43,
                "name"       => "Coronel Pilar",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 43,
                "name"       => "Cotiporã",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 43,
                "name"       => "Coxilha",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 43,
                "name"       => "Crissiumal",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 43,
                "name"       => "Cristal",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 43,
                "name"       => "Cristal do Sul",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 43,
                "name"       => "Cruz Alta",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 43,
                "name"       => "Cruzaltense",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 43,
                "name"       => "Cruzeiro do Sul",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 43,
                "name"       => "David Canabarro",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 43,
                "name"       => "Derrubadas",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 43,
                "name"       => "Dezesseis de Novembro",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 43,
                "name"       => "Dilermando de Aguiar",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 43,
                "name"       => "Dois Irmãos",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 43,
                "name"       => "Dois Irmãos das Missões",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 43,
                "name"       => "Dois Lajeados",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 43,
                "name"       => "Dom Feliciano",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 43,
                "name"       => "Dom Pedro de Alcântara",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 43,
                "name"       => "Dom Pedrito",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 43,
                "name"       => "Dona Francisca",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 43,
                "name"       => "Doutor Maurício Cardoso",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 43,
                "name"       => "Doutor Ricardo",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 43,
                "name"       => "Eldorado do Sul",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 43,
                "name"       => "Encantado",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 43,
                "name"       => "Encruzilhada do Sul",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 43,
                "name"       => "Engenho Velho",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 43,
                "name"       => "Entre-Ijuís",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 43,
                "name"       => "Entre Rios do Sul",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 43,
                "name"       => "Erebango",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 43,
                "name"       => "Erechim",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 43,
                "name"       => "Ernestina",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 43,
                "name"       => "Herval",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 43,
                "name"       => "Erval Grande",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 43,
                "name"       => "Erval Seco",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 43,
                "name"       => "Esmeralda",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 43,
                "name"       => "Esperança do Sul",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 43,
                "name"       => "Espumoso",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 43,
                "name"       => "Estação",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 43,
                "name"       => "Estância Velha",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 43,
                "name"       => "Esteio",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 43,
                "name"       => "Estrela",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 43,
                "name"       => "Estrela Velha",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 43,
                "name"       => "Eugênio de Castro",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 43,
                "name"       => "Fagundes Varela",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 43,
                "name"       => "Farroupilha",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 43,
                "name"       => "Faxinal do Soturno",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 43,
                "name"       => "Faxinalzinho",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 43,
                "name"       => "Fazenda Vilanova",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 43,
                "name"       => "Feliz",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 43,
                "name"       => "Flores da Cunha",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 43,
                "name"       => "Floriano Peixoto",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 43,
                "name"       => "Fontoura Xavier",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 43,
                "name"       => "Formigueiro",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 43,
                "name"       => "Forquetinha",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 43,
                "name"       => "Fortaleza dos Valos",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 43,
                "name"       => "Frederico Westphalen",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 43,
                "name"       => "Garibaldi",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 43,
                "name"       => "Garruchos",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 43,
                "name"       => "Gaurama",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 43,
                "name"       => "General Câmara",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 43,
                "name"       => "Gentil",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 43,
                "name"       => "Getúlio Vargas",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 43,
                "name"       => "Giruá",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 43,
                "name"       => "Glorinha",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 43,
                "name"       => "Gramado",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 43,
                "name"       => "Gramado dos Loureiros",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 43,
                "name"       => "Gramado Xavier",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 43,
                "name"       => "Gravataí",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 43,
                "name"       => "Guabiju",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 43,
                "name"       => "Guaíba",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 43,
                "name"       => "Guaporé",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 43,
                "name"       => "Guarani das Missões",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 43,
                "name"       => "Harmonia",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 43,
                "name"       => "Herveiras",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 43,
                "name"       => "Horizontina",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 43,
                "name"       => "Hulha Negra",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 43,
                "name"       => "Humaitá",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 43,
                "name"       => "Ibarama",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 43,
                "name"       => "Ibiaçá",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 43,
                "name"       => "Ibiraiaras",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 43,
                "name"       => "Ibirapuitã",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 43,
                "name"       => "Ibirubá",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 43,
                "name"       => "Igrejinha",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 43,
                "name"       => "Ijuí",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 43,
                "name"       => "Ilópolis",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 43,
                "name"       => "Imbé",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 43,
                "name"       => "Imigrante",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 43,
                "name"       => "Independência",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 43,
                "name"       => "Inhacorá",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 43,
                "name"       => "Ipê",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 43,
                "name"       => "Ipiranga do Sul",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 43,
                "name"       => "Iraí",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 43,
                "name"       => "Itaara",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 43,
                "name"       => "Itacurubi",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 43,
                "name"       => "Itapuca",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 43,
                "name"       => "Itaqui",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 43,
                "name"       => "Itati",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 43,
                "name"       => "Itatiba do Sul",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 43,
                "name"       => "Ivorá",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 43,
                "name"       => "Ivoti",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 43,
                "name"       => "Jaboticaba",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 43,
                "name"       => "Jacuizinho",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 43,
                "name"       => "Jacutinga",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 43,
                "name"       => "Jaguarão",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 43,
                "name"       => "Jaguari",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 43,
                "name"       => "Jaquirana",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 43,
                "name"       => "Jari",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 43,
                "name"       => "Jóia",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 43,
                "name"       => "Júlio de Castilhos",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 43,
                "name"       => "Lagoa Bonita do Sul",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 43,
                "name"       => "Lagoão",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 43,
                "name"       => "Lagoa dos Três Cantos",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 43,
                "name"       => "Lagoa Vermelha",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 43,
                "name"       => "Lajeado",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 43,
                "name"       => "Lajeado do Bugre",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 43,
                "name"       => "Lavras do Sul",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 43,
                "name"       => "Liberato Salzano",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 43,
                "name"       => "Lindolfo Collor",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 43,
                "name"       => "Linha Nova",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 43,
                "name"       => "Machadinho",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 43,
                "name"       => "Maçambara",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 43,
                "name"       => "Mampituba",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 43,
                "name"       => "Manoel Viana",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 43,
                "name"       => "Maquiné",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 43,
                "name"       => "Maratá",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 43,
                "name"       => "Marau",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 43,
                "name"       => "Marcelino Ramos",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 43,
                "name"       => "Mariana Pimentel",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 43,
                "name"       => "Mariano Moro",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 43,
                "name"       => "Marques de Souza",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 43,
                "name"       => "Mata",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 43,
                "name"       => "Mato Castelhano",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 43,
                "name"       => "Mato Leitão",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 43,
                "name"       => "Mato Queimado",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 43,
                "name"       => "Maximiliano de Almeida",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 43,
                "name"       => "Minas do Leão",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 43,
                "name"       => "Miraguaí",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 43,
                "name"       => "Montauri",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 43,
                "name"       => "Monte Alegre dos Campos",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 43,
                "name"       => "Monte Belo do Sul",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 43,
                "name"       => "Montenegro",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 43,
                "name"       => "Mormaço",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 43,
                "name"       => "Morrinhos do Sul",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 43,
                "name"       => "Morro Redondo",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 43,
                "name"       => "Morro Reuter",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 43,
                "name"       => "Mostardas",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 43,
                "name"       => "Muçum",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 43,
                "name"       => "Muitos Capões",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 43,
                "name"       => "Muliterno",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 43,
                "name"       => "Não-Me-Toque",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 43,
                "name"       => "Nicolau Vergueiro",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 43,
                "name"       => "Nonoai",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 43,
                "name"       => "Nova Alvorada",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 43,
                "name"       => "Nova Araçá",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 43,
                "name"       => "Nova Bassano",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 43,
                "name"       => "Nova Boa Vista",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 43,
                "name"       => "Nova Bréscia",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 43,
                "name"       => "Nova Candelária",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 43,
                "name"       => "Nova Esperança do Sul",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 43,
                "name"       => "Nova Hartz",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 43,
                "name"       => "Nova Pádua",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 43,
                "name"       => "Nova Palma",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 43,
                "name"       => "Nova Petrópolis",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 43,
                "name"       => "Nova Prata",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 43,
                "name"       => "Nova Ramada",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 43,
                "name"       => "Nova Roma do Sul",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 43,
                "name"       => "Nova Santa Rita",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 43,
                "name"       => "Novo Cabrais",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 43,
                "name"       => "Novo Hamburgo",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 43,
                "name"       => "Novo Machado",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 43,
                "name"       => "Novo Tiradentes",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 43,
                "name"       => "Novo Xingu",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 43,
                "name"       => "Novo Barreiro",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 43,
                "name"       => "Osório",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 43,
                "name"       => "Paim Filho",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 43,
                "name"       => "Palmares do Sul",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 43,
                "name"       => "Palmeira das Missões",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 43,
                "name"       => "Palmitinho",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 43,
                "name"       => "Panambi",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 43,
                "name"       => "Pantano Grande",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 43,
                "name"       => "Paraí",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 43,
                "name"       => "Paraíso do Sul",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 43,
                "name"       => "Pareci Novo",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 43,
                "name"       => "Parobé",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 43,
                "name"       => "Passa Sete",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 43,
                "name"       => "Passo do Sobrado",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 43,
                "name"       => "Passo Fundo",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 43,
                "name"       => "Paulo Bento",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 43,
                "name"       => "Paverama",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 43,
                "name"       => "Pedras Altas",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 43,
                "name"       => "Pedro Osório",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 43,
                "name"       => "Pejuçara",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 43,
                "name"       => "Pelotas",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 43,
                "name"       => "Picada Café",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 43,
                "name"       => "Pinhal",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 43,
                "name"       => "Pinhal da Serra",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 43,
                "name"       => "Pinhal Grande",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 43,
                "name"       => "Pinheirinho do Vale",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 43,
                "name"       => "Pinheiro Machado",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 43,
                "name"       => "Pinto Bandeira",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 43,
                "name"       => "Pirapó",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 43,
                "name"       => "Piratini",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 43,
                "name"       => "Planalto",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 43,
                "name"       => "Poço das Antas",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 43,
                "name"       => "Pontão",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 43,
                "name"       => "Ponte Preta",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 43,
                "name"       => "Portão",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 43,
                "name"       => "Porto Alegre",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 43,
                "name"       => "Porto Lucena",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 43,
                "name"       => "Porto Mauá",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 43,
                "name"       => "Porto Vera Cruz",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 43,
                "name"       => "Porto Xavier",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 43,
                "name"       => "Pouso Novo",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 43,
                "name"       => "Presidente Lucena",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 43,
                "name"       => "Progresso",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 43,
                "name"       => "Protásio Alves",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 43,
                "name"       => "Putinga",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 43,
                "name"       => "Quaraí",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 43,
                "name"       => "Quatro Irmãos",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 43,
                "name"       => "Quevedos",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 43,
                "name"       => "Quinze de Novembro",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 43,
                "name"       => "Redentora",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 43,
                "name"       => "Relvado",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 43,
                "name"       => "Restinga Seca",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 43,
                "name"       => "Rio dos Índios",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 43,
                "name"       => "Rio Grande",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 43,
                "name"       => "Rio Pardo",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 43,
                "name"       => "Riozinho",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 43,
                "name"       => "Roca Sales",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 43,
                "name"       => "Rodeio Bonito",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 43,
                "name"       => "Rolador",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 43,
                "name"       => "Rolante",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 43,
                "name"       => "Ronda Alta",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 43,
                "name"       => "Rondinha",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 43,
                "name"       => "Roque Gonzales",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 43,
                "name"       => "Rosário do Sul",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 43,
                "name"       => "Sagrada Família",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 43,
                "name"       => "Saldanha Marinho",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 43,
                "name"       => "Salto do Jacuí",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 43,
                "name"       => "Salvador das Missões",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 43,
                "name"       => "Salvador do Sul",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 43,
                "name"       => "Sananduva",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 43,
                "name"       => "Santa Bárbara do Sul",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 43,
                "name"       => "Santa Cecília do Sul",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 43,
                "name"       => "Santa Clara do Sul",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 43,
                "name"       => "Santa Cruz do Sul",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 43,
                "name"       => "Santa Maria",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 43,
                "name"       => "Santa Maria do Herval",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 43,
                "name"       => "Santa Margarida do Sul",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 43,
                "name"       => "Santana da Boa Vista",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 43,
                "name"       => "Santana do Livramento",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 43,
                "name"       => "Santa Rosa",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 43,
                "name"       => "Santa Tereza",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 43,
                "name"       => "Santa Vitória do Palmar",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 43,
                "name"       => "Santiago",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 43,
                "name"       => "Santo Ângelo",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 43,
                "name"       => "Santo Antônio do Palma",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 43,
                "name"       => "Santo Antônio da Patrulha",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 43,
                "name"       => "Santo Antônio das Missões",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 43,
                "name"       => "Santo Antônio do Planalto",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 43,
                "name"       => "Santo Augusto",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 43,
                "name"       => "Santo Cristo",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 43,
                "name"       => "Santo Expedito do Sul",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 43,
                "name"       => "São Borja",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 43,
                "name"       => "São Domingos do Sul",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 43,
                "name"       => "São Francisco de Assis",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 43,
                "name"       => "São Francisco de Paula",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 43,
                "name"       => "São Gabriel",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 43,
                "name"       => "São Jerônimo",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 43,
                "name"       => "São João da Urtiga",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 43,
                "name"       => "São João do Polêsine",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 43,
                "name"       => "São Jorge",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 43,
                "name"       => "São José das Missões",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 43,
                "name"       => "São José do Herval",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 43,
                "name"       => "São José do Hortêncio",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 43,
                "name"       => "São José do Inhacorá",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 43,
                "name"       => "São José do Norte",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 43,
                "name"       => "São José do Ouro",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 43,
                "name"       => "São José do Sul",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 43,
                "name"       => "São José dos Ausentes",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 43,
                "name"       => "São Leopoldo",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 43,
                "name"       => "São Lourenço do Sul",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 43,
                "name"       => "São Luiz Gonzaga",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 43,
                "name"       => "São Marcos",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 43,
                "name"       => "São Martinho",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 43,
                "name"       => "São Martinho da Serra",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 43,
                "name"       => "São Miguel das Missões",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 43,
                "name"       => "São Nicolau",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 43,
                "name"       => "São Paulo das Missões",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 43,
                "name"       => "São Pedro da Serra",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 43,
                "name"       => "São Pedro das Missões",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 43,
                "name"       => "São Pedro do Butiá",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 43,
                "name"       => "São Pedro do Sul",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 43,
                "name"       => "São Sebastião do Caí",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 43,
                "name"       => "São Sepé",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 43,
                "name"       => "São Valentim",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 43,
                "name"       => "São Valentim do Sul",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 43,
                "name"       => "São Valério do Sul",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 43,
                "name"       => "São Vendelino",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 43,
                "name"       => "São Vicente do Sul",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 43,
                "name"       => "Sapiranga",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 43,
                "name"       => "Sapucaia do Sul",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 43,
                "name"       => "Sarandi",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 43,
                "name"       => "Seberi",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 43,
                "name"       => "Sede Nova",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 43,
                "name"       => "Segredo",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 43,
                "name"       => "Selbach",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 43,
                "name"       => "Senador Salgado Filho",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 43,
                "name"       => "Sentinela do Sul",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 43,
                "name"       => "Serafina Corrêa",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 43,
                "name"       => "Sério",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 43,
                "name"       => "Sertão",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 43,
                "name"       => "Sertão Santana",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 43,
                "name"       => "Sete de Setembro",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 43,
                "name"       => "Severiano de Almeida",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 43,
                "name"       => "Silveira Martins",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 43,
                "name"       => "Sinimbu",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 43,
                "name"       => "Sobradinho",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 43,
                "name"       => "Soledade",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 43,
                "name"       => "Tabaí",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 43,
                "name"       => "Tapejara",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 43,
                "name"       => "Tapera",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 43,
                "name"       => "Tapes",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 43,
                "name"       => "Taquara",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 43,
                "name"       => "Taquari",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 43,
                "name"       => "Taquaruçu do Sul",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 43,
                "name"       => "Tavares",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 43,
                "name"       => "Tenente Portela",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 43,
                "name"       => "Terra de Areia",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 43,
                "name"       => "Teutônia",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 43,
                "name"       => "Tio Hugo",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 43,
                "name"       => "Tiradentes do Sul",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 43,
                "name"       => "Toropi",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 43,
                "name"       => "Torres",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 43,
                "name"       => "Tramandaí",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 43,
                "name"       => "Travesseiro",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 43,
                "name"       => "Três Arroios",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 43,
                "name"       => "Três Cachoeiras",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 43,
                "name"       => "Três Coroas",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 43,
                "name"       => "Três de Maio",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 43,
                "name"       => "Três Forquilhas",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 43,
                "name"       => "Três Palmeiras",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 43,
                "name"       => "Três Passos",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 43,
                "name"       => "Trindade do Sul",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 43,
                "name"       => "Triunfo",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 43,
                "name"       => "Tucunduva",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 43,
                "name"       => "Tunas",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 43,
                "name"       => "Tupanci do Sul",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 43,
                "name"       => "Tupanciretã",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 43,
                "name"       => "Tupandi",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 43,
                "name"       => "Tuparendi",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 43,
                "name"       => "Turuçu",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 43,
                "name"       => "Ubiretama",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 43,
                "name"       => "União da Serra",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 43,
                "name"       => "Unistalda",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 43,
                "name"       => "Uruguaiana",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 43,
                "name"       => "Vacaria",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 43,
                "name"       => "Vale Verde",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 43,
                "name"       => "Vale do Sol",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 43,
                "name"       => "Vale Real",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 43,
                "name"       => "Vanini",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 43,
                "name"       => "Venâncio Aires",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 43,
                "name"       => "Vera Cruz",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 43,
                "name"       => "Veranópolis",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 43,
                "name"       => "Vespasiano Correa",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 43,
                "name"       => "Viadutos",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 43,
                "name"       => "Viamão",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 43,
                "name"       => "Vicente Dutra",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 43,
                "name"       => "Victor Graeff",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 43,
                "name"       => "Vila Flores",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 43,
                "name"       => "Vila Lângaro",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 43,
                "name"       => "Vila Maria",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 43,
                "name"       => "Vila Nova do Sul",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 43,
                "name"       => "Vista Alegre",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 43,
                "name"       => "Vista Alegre do Prata",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 43,
                "name"       => "Vista Gaúcha",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 43,
                "name"       => "Vitória das Missões",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 43,
                "name"       => "Westfália",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 43,
                "name"       => "Xangri-lá",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 50,
                "name"       => "Água Clara",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 50,
                "name"       => "Alcinópolis",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 50,
                "name"       => "Amambai",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 50,
                "name"       => "Anastácio",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 50,
                "name"       => "Anaurilândia",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 50,
                "name"       => "Angélica",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 50,
                "name"       => "Antônio João",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 50,
                "name"       => "Aparecida do Taboado",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 50,
                "name"       => "Aquidauana",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 50,
                "name"       => "Aral Moreira",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 50,
                "name"       => "Bandeirantes",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 50,
                "name"       => "Bataguassu",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 50,
                "name"       => "Batayporã",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 50,
                "name"       => "Bela Vista",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 50,
                "name"       => "Bodoquena",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 50,
                "name"       => "Bonito",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 50,
                "name"       => "Brasilândia",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 50,
                "name"       => "Caarapó",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 50,
                "name"       => "Camapuã",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 50,
                "name"       => "Campo Grande",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 50,
                "name"       => "Caracol",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 50,
                "name"       => "Cassilândia",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 50,
                "name"       => "Chapadão do Sul",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 50,
                "name"       => "Corguinho",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 50,
                "name"       => "Coronel Sapucaia",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 50,
                "name"       => "Corumbá",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 50,
                "name"       => "Costa Rica",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 50,
                "name"       => "Coxim",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 50,
                "name"       => "Deodápolis",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 50,
                "name"       => "Dois Irmãos do Buriti",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 50,
                "name"       => "Douradina",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 50,
                "name"       => "Dourados",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 50,
                "name"       => "Eldorado",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 50,
                "name"       => "Fátima do Sul",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 50,
                "name"       => "Figueirão",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 50,
                "name"       => "Glória de Dourados",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 50,
                "name"       => "Guia Lopes da Laguna",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 50,
                "name"       => "Iguatemi",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 50,
                "name"       => "Inocência",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 50,
                "name"       => "Itaporã",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 50,
                "name"       => "Itaquiraí",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 50,
                "name"       => "Ivinhema",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 50,
                "name"       => "Japorã",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 50,
                "name"       => "Jaraguari",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 50,
                "name"       => "Jardim",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 50,
                "name"       => "Jateí",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 50,
                "name"       => "Juti",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 50,
                "name"       => "Ladário",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 50,
                "name"       => "Laguna Carapã",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 50,
                "name"       => "Maracaju",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 50,
                "name"       => "Miranda",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 50,
                "name"       => "Mundo Novo",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 50,
                "name"       => "Naviraí",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 50,
                "name"       => "Nioaque",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 50,
                "name"       => "Nova Alvorada do Sul",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 50,
                "name"       => "Nova Andradina",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 50,
                "name"       => "Novo Horizonte do Sul",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 50,
                "name"       => "Paraíso das Águas",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 50,
                "name"       => "Paranaíba",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 50,
                "name"       => "Paranhos",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 50,
                "name"       => "Pedro Gomes",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 50,
                "name"       => "Ponta Porã",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 50,
                "name"       => "Porto Murtinho",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 50,
                "name"       => "Ribas do Rio Pardo",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 50,
                "name"       => "Rio Brilhante",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 50,
                "name"       => "Rio Negro",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 50,
                "name"       => "Rio Verde de Mato Grosso",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 50,
                "name"       => "Rochedo",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 50,
                "name"       => "Santa Rita do Pardo",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 50,
                "name"       => "São Gabriel do Oeste",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 50,
                "name"       => "Sete Quedas",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 50,
                "name"       => "Selvíria",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 50,
                "name"       => "Sidrolândia",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 50,
                "name"       => "Sonora",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 50,
                "name"       => "Tacuru",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 50,
                "name"       => "Taquarussu",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 50,
                "name"       => "Terenos",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 50,
                "name"       => "Três Lagoas",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 50,
                "name"       => "Vicentina",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 51,
                "name"       => "Acorizal",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 51,
                "name"       => "Água Boa",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 51,
                "name"       => "Alta Floresta",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 51,
                "name"       => "Alto Araguaia",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 51,
                "name"       => "Alto Boa Vista",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 51,
                "name"       => "Alto Garças",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 51,
                "name"       => "Alto Paraguai",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 51,
                "name"       => "Alto Taquari",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 51,
                "name"       => "Apiacás",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 51,
                "name"       => "Araguaiana",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 51,
                "name"       => "Araguainha",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 51,
                "name"       => "Araputanga",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 51,
                "name"       => "Arenápolis",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 51,
                "name"       => "Aripuanã",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 51,
                "name"       => "Barão de Melgaço",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 51,
                "name"       => "Barra do Bugres",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 51,
                "name"       => "Barra do Garças",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 51,
                "name"       => "Bom Jesus do Araguaia",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 51,
                "name"       => "Brasnorte",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 51,
                "name"       => "Cáceres",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 51,
                "name"       => "Campinápolis",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 51,
                "name"       => "Campo Novo do Parecis",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 51,
                "name"       => "Campo Verde",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 51,
                "name"       => "Campos de Júlio",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 51,
                "name"       => "Canabrava do Norte",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 51,
                "name"       => "Canarana",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 51,
                "name"       => "Carlinda",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 51,
                "name"       => "Castanheira",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 51,
                "name"       => "Chapada dos Guimarães",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 51,
                "name"       => "Cláudia",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 51,
                "name"       => "Cocalinho",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 51,
                "name"       => "Colíder",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 51,
                "name"       => "Colniza",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 51,
                "name"       => "Comodoro",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 51,
                "name"       => "Confresa",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 51,
                "name"       => "Conquista d`Oeste",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 51,
                "name"       => "Cotriguaçu",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 51,
                "name"       => "Cuiabá",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 51,
                "name"       => "Curvelândia",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 51,
                "name"       => "Denise",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 51,
                "name"       => "Diamantino",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 51,
                "name"       => "Dom Aquino",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 51,
                "name"       => "Feliz Natal",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 51,
                "name"       => "Figueirópolis d`Oeste",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 51,
                "name"       => "Gaúcha do Norte",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 51,
                "name"       => "General Carneiro",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 51,
                "name"       => "Glória d`Oeste",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 51,
                "name"       => "Guarantã do Norte",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 51,
                "name"       => "Guiratinga",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 51,
                "name"       => "Indiavaí",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 51,
                "name"       => "Ipiranga do Norte",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 51,
                "name"       => "Itanhangá",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 51,
                "name"       => "Itaúba",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 51,
                "name"       => "Itiquira",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 51,
                "name"       => "Jaciara",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 51,
                "name"       => "Jangada",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 51,
                "name"       => "Jauru",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 51,
                "name"       => "Juara",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 51,
                "name"       => "Juína",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 51,
                "name"       => "Juruena",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 51,
                "name"       => "Juscimeira",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 51,
                "name"       => "Lambari d`Oeste",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 51,
                "name"       => "Lucas do Rio Verde",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 51,
                "name"       => "Luciára",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 51,
                "name"       => "Vila Bela da Santíssima Trindade",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 51,
                "name"       => "Marcelândia",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 51,
                "name"       => "Matupá",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 51,
                "name"       => "Mirassol d`Oeste",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 51,
                "name"       => "Nobres",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 51,
                "name"       => "Nortelândia",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 51,
                "name"       => "Nossa Senhora do Livramento",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 51,
                "name"       => "Nova Bandeirantes",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 51,
                "name"       => "Nova Nazaré",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 51,
                "name"       => "Nova Lacerda",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 51,
                "name"       => "Nova Santa Helena",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 51,
                "name"       => "Nova Brasilândia",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 51,
                "name"       => "Nova Canaã do Norte",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 51,
                "name"       => "Nova Mutum",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 51,
                "name"       => "Nova Olímpia",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 51,
                "name"       => "Nova Ubiratã",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 51,
                "name"       => "Nova Xavantina",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 51,
                "name"       => "Novo Mundo",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 51,
                "name"       => "Novo Horizonte do Norte",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 51,
                "name"       => "Novo São Joaquim",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 51,
                "name"       => "Paranaíta",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 51,
                "name"       => "Paranatinga",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 51,
                "name"       => "Novo Santo Antônio",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 51,
                "name"       => "Pedra Preta",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 51,
                "name"       => "Peixoto de Azevedo",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 51,
                "name"       => "Planalto da Serra",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 51,
                "name"       => "Poconé",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 51,
                "name"       => "Pontal do Araguaia",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 51,
                "name"       => "Ponte Branca",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 51,
                "name"       => "Pontes e Lacerda",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 51,
                "name"       => "Porto Alegre do Norte",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 51,
                "name"       => "Porto dos Gaúchos",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 51,
                "name"       => "Porto Esperidião",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 51,
                "name"       => "Porto Estrela",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 51,
                "name"       => "Poxoréo",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 51,
                "name"       => "Primavera do Leste",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 51,
                "name"       => "Querência",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 51,
                "name"       => "São José dos Quatro Marcos",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 51,
                "name"       => "Reserva do Cabaçal",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 51,
                "name"       => "Ribeirão Cascalheira",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 51,
                "name"       => "Ribeirãozinho",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 51,
                "name"       => "Rio Branco",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 51,
                "name"       => "Santa Carmem",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 51,
                "name"       => "Santo Afonso",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 51,
                "name"       => "São José do Povo",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 51,
                "name"       => "São José do Rio Claro",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 51,
                "name"       => "São José do Xingu",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 51,
                "name"       => "São Pedro da Cipa",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 51,
                "name"       => "Rondolândia",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 51,
                "name"       => "Rondonópolis",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 51,
                "name"       => "Rosário Oeste",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 51,
                "name"       => "Santa Cruz do Xingu",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 51,
                "name"       => "Salto do Céu",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 51,
                "name"       => "Santa Rita do Trivelato",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 51,
                "name"       => "Santa Terezinha",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 51,
                "name"       => "Santo Antônio do Leste",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 51,
                "name"       => "Santo Antônio do Leverger",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 51,
                "name"       => "São Félix do Araguaia",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 51,
                "name"       => "Sapezal",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 51,
                "name"       => "Serra Nova Dourada",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 51,
                "name"       => "Sinop",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 51,
                "name"       => "Sorriso",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 51,
                "name"       => "Tabaporã",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 51,
                "name"       => "Tangará da Serra",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 51,
                "name"       => "Tapurah",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 51,
                "name"       => "Terra Nova do Norte",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 51,
                "name"       => "Tesouro",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 51,
                "name"       => "Torixoréu",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 51,
                "name"       => "União do Sul",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 51,
                "name"       => "Vale de São Domingos",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 51,
                "name"       => "Várzea Grande",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 51,
                "name"       => "Vera",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 51,
                "name"       => "Vila Rica",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 51,
                "name"       => "Nova Guarita",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 51,
                "name"       => "Nova Marilândia",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 51,
                "name"       => "Nova Maringá",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 51,
                "name"       => "Nova Monte verde",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 52,
                "name"       => "Abadia de Goiás",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 52,
                "name"       => "Abadiânia",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 52,
                "name"       => "Acreúna",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 52,
                "name"       => "Adelândia",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 52,
                "name"       => "Água Fria de Goiás",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 52,
                "name"       => "Água Limpa",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 52,
                "name"       => "Águas Lindas de Goiás",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 52,
                "name"       => "Alexânia",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 52,
                "name"       => "Aloândia",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 52,
                "name"       => "Alto Horizonte",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 52,
                "name"       => "Alto Paraíso de Goiás",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 52,
                "name"       => "Alvorada do Norte",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 52,
                "name"       => "Amaralina",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 52,
                "name"       => "Americano do Brasil",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 52,
                "name"       => "Amorinópolis",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 52,
                "name"       => "Anápolis",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 52,
                "name"       => "Anhanguera",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 52,
                "name"       => "Anicuns",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 52,
                "name"       => "Aparecida de Goiânia",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 52,
                "name"       => "Aparecida do Rio Doce",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 52,
                "name"       => "Aporé",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 52,
                "name"       => "Araçu",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 52,
                "name"       => "Aragarças",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 52,
                "name"       => "Aragoiânia",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 52,
                "name"       => "Araguapaz",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 52,
                "name"       => "Arenópolis",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 52,
                "name"       => "Aruanã",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 52,
                "name"       => "Aurilândia",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 52,
                "name"       => "Avelinópolis",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 52,
                "name"       => "Baliza",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 52,
                "name"       => "Barro Alto",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 52,
                "name"       => "Bela Vista de Goiás",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 52,
                "name"       => "Bom Jardim de Goiás",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 52,
                "name"       => "Bom Jesus de Goiás",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 52,
                "name"       => "Bonfinópolis",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 52,
                "name"       => "Bonópolis",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 52,
                "name"       => "Brazabrantes",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 52,
                "name"       => "Britânia",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 52,
                "name"       => "Buriti Alegre",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 52,
                "name"       => "Buriti de Goiás",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 52,
                "name"       => "Buritinópolis",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 52,
                "name"       => "Cabeceiras",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 52,
                "name"       => "Cachoeira Alta",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 52,
                "name"       => "Cachoeira de Goiás",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 52,
                "name"       => "Cachoeira Dourada",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 52,
                "name"       => "Caçu",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 52,
                "name"       => "Caiapônia",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 52,
                "name"       => "Caldas Novas",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 52,
                "name"       => "Caldazinha",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 52,
                "name"       => "Campestre de Goiás",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 52,
                "name"       => "Campinaçu",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 52,
                "name"       => "Campinorte",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 52,
                "name"       => "Campo Alegre de Goiás",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 52,
                "name"       => "Campo Limpo de Goiás",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 52,
                "name"       => "Campos Belos",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 52,
                "name"       => "Campos Verdes",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 52,
                "name"       => "Carmo do Rio Verde",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 52,
                "name"       => "Castelândia",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 52,
                "name"       => "Catalão",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 52,
                "name"       => "Caturaí",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 52,
                "name"       => "Cavalcante",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 52,
                "name"       => "Ceres",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 52,
                "name"       => "Cezarina",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 52,
                "name"       => "Chapadão do Céu",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 52,
                "name"       => "Cidade Ocidental",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 52,
                "name"       => "Cocalzinho de Goiás",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 52,
                "name"       => "Colinas do Sul",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 52,
                "name"       => "Córrego do Ouro",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 52,
                "name"       => "Corumbá de Goiás",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 52,
                "name"       => "Corumbaíba",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 52,
                "name"       => "Cristalina",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 52,
                "name"       => "Cristianópolis",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 52,
                "name"       => "Crixás",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 52,
                "name"       => "Cromínia",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 52,
                "name"       => "Cumari",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 52,
                "name"       => "Damianópolis",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 52,
                "name"       => "Damolândia",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 52,
                "name"       => "Davinópolis",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 52,
                "name"       => "Diorama",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 52,
                "name"       => "Doverlândia",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 52,
                "name"       => "Edealina",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 52,
                "name"       => "Edéia",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 52,
                "name"       => "Estrela do Norte",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 52,
                "name"       => "Faina",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 52,
                "name"       => "Fazenda Nova",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 52,
                "name"       => "Firminópolis",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 52,
                "name"       => "Flores de Goiás",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 52,
                "name"       => "Formosa",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 52,
                "name"       => "Formoso",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 52,
                "name"       => "Gameleira de Goiás",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 52,
                "name"       => "Divinópolis de Goiás",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 52,
                "name"       => "Goianápolis",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 52,
                "name"       => "Goiandira",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 52,
                "name"       => "Goianésia",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 52,
                "name"       => "Goiânia",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 52,
                "name"       => "Goianira",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 52,
                "name"       => "Goiás",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 52,
                "name"       => "Goiatuba",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 52,
                "name"       => "Gouvelândia",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 52,
                "name"       => "Guapó",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 52,
                "name"       => "Guaraíta",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 52,
                "name"       => "Guarani de Goiás",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 52,
                "name"       => "Guarinos",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 52,
                "name"       => "Heitoraí",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 52,
                "name"       => "Hidrolândia",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 52,
                "name"       => "Hidrolina",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 52,
                "name"       => "Iaciara",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 52,
                "name"       => "Inaciolândia",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 52,
                "name"       => "Indiara",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 52,
                "name"       => "Inhumas",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 52,
                "name"       => "Ipameri",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 52,
                "name"       => "Ipiranga de Goiás",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 52,
                "name"       => "Iporá",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 52,
                "name"       => "Israelândia",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 52,
                "name"       => "Itaberaí",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 52,
                "name"       => "Itaguari",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 52,
                "name"       => "Itaguaru",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 52,
                "name"       => "Itajá",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 52,
                "name"       => "Itapaci",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 52,
                "name"       => "Itapirapuã",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 52,
                "name"       => "Itapuranga",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 52,
                "name"       => "Itarumã",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 52,
                "name"       => "Itauçu",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 52,
                "name"       => "Itumbiara",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 52,
                "name"       => "Ivolândia",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 52,
                "name"       => "Jandaia",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 52,
                "name"       => "Jaraguá",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 52,
                "name"       => "Jataí",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 52,
                "name"       => "Jaupaci",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 52,
                "name"       => "Jesúpolis",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 52,
                "name"       => "Joviânia",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 52,
                "name"       => "Jussara",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 52,
                "name"       => "Lagoa Santa",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 52,
                "name"       => "Leopoldo de Bulhões",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 52,
                "name"       => "Luziânia",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 52,
                "name"       => "Mairipotaba",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 52,
                "name"       => "Mambaí",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 52,
                "name"       => "Mara Rosa",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 52,
                "name"       => "Marzagão",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 52,
                "name"       => "Matrinchã",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 52,
                "name"       => "Maurilândia",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 52,
                "name"       => "Mimoso de Goiás",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 52,
                "name"       => "Minaçu",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 52,
                "name"       => "Mineiros",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 52,
                "name"       => "Moiporá",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 52,
                "name"       => "Monte Alegre de Goiás",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 52,
                "name"       => "Montes Claros de Goiás",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 52,
                "name"       => "Montividiu",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 52,
                "name"       => "Montividiu do Norte",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 52,
                "name"       => "Morrinhos",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 52,
                "name"       => "Morro Agudo de Goiás",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 52,
                "name"       => "Mossâmedes",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 52,
                "name"       => "Mozarlândia",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 52,
                "name"       => "Mundo Novo",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 52,
                "name"       => "Mutunópolis",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 52,
                "name"       => "Nazário",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 52,
                "name"       => "Nerópolis",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 52,
                "name"       => "Niquelândia",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 52,
                "name"       => "Nova América",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 52,
                "name"       => "Nova Aurora",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 52,
                "name"       => "Nova Crixás",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 52,
                "name"       => "Nova Glória",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 52,
                "name"       => "Nova Iguaçu de Goiás",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 52,
                "name"       => "Nova Roma",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 52,
                "name"       => "Nova Veneza",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 52,
                "name"       => "Novo Brasil",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 52,
                "name"       => "Novo Gama",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 52,
                "name"       => "Novo Planalto",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 52,
                "name"       => "Orizona",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 52,
                "name"       => "Ouro Verde de Goiás",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 52,
                "name"       => "Ouvidor",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 52,
                "name"       => "Padre Bernardo",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 52,
                "name"       => "Palestina de Goiás",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 52,
                "name"       => "Palmeiras de Goiás",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 52,
                "name"       => "Palmelo",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 52,
                "name"       => "Palminópolis",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 52,
                "name"       => "Panamá",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 52,
                "name"       => "Paranaiguara",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 52,
                "name"       => "Paraúna",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 52,
                "name"       => "Perolândia",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 52,
                "name"       => "Petrolina de Goiás",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 52,
                "name"       => "Pilar de Goiás",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 52,
                "name"       => "Piracanjuba",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 52,
                "name"       => "Piranhas",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 52,
                "name"       => "Pirenópolis",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 52,
                "name"       => "Pires do Rio",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 52,
                "name"       => "Planaltina",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 52,
                "name"       => "Pontalina",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 52,
                "name"       => "Porangatu",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 52,
                "name"       => "Porteirão",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 52,
                "name"       => "Portelândia",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 52,
                "name"       => "Posse",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 52,
                "name"       => "Professor Jamil",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 52,
                "name"       => "Quirinópolis",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 52,
                "name"       => "Rialma",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 52,
                "name"       => "Rianápolis",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 52,
                "name"       => "Rio Quente",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 52,
                "name"       => "Rio Verde",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 52,
                "name"       => "Rubiataba",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 52,
                "name"       => "Sanclerlândia",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 52,
                "name"       => "Santa Bárbara de Goiás",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 52,
                "name"       => "Santa Cruz de Goiás",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 52,
                "name"       => "Santa Fé de Goiás",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 52,
                "name"       => "Santa Helena de Goiás",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 52,
                "name"       => "Santa Isabel",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 52,
                "name"       => "Santa Rita do Araguaia",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 52,
                "name"       => "Santa Rita do Novo Destino",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 52,
                "name"       => "Santa Rosa de Goiás",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 52,
                "name"       => "Santa Tereza de Goiás",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 52,
                "name"       => "Santa Terezinha de Goiás",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 52,
                "name"       => "Santo Antônio da Barra",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 52,
                "name"       => "Santo Antônio de Goiás",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 52,
                "name"       => "Santo Antônio do Descoberto",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 52,
                "name"       => "São Domingos",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 52,
                "name"       => "São Francisco de Goiás",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 52,
                "name"       => "São João d`Aliança",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 52,
                "name"       => "São João da Paraúna",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 52,
                "name"       => "São Luís de Montes Belos",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 52,
                "name"       => "São Luíz do Norte",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 52,
                "name"       => "São Miguel do Araguaia",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 52,
                "name"       => "São Miguel do Passa Quatro",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 52,
                "name"       => "São Patrício",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 52,
                "name"       => "São Simão",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 52,
                "name"       => "Senador Canedo",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 52,
                "name"       => "Serranópolis",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 52,
                "name"       => "Silvânia",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 52,
                "name"       => "Simolândia",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 52,
                "name"       => "Sítio d`Abadia",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 52,
                "name"       => "Taquaral de Goiás",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 52,
                "name"       => "Teresina de Goiás",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 52,
                "name"       => "Terezópolis de Goiás",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 52,
                "name"       => "Três Ranchos",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 52,
                "name"       => "Trindade",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 52,
                "name"       => "Trombas",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 52,
                "name"       => "Turvânia",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 52,
                "name"       => "Turvelândia",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 52,
                "name"       => "Uirapuru",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 52,
                "name"       => "Uruaçu",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 52,
                "name"       => "Uruana",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 52,
                "name"       => "Urutaí",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 52,
                "name"       => "Valparaíso de Goiás",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 52,
                "name"       => "Varjão",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 52,
                "name"       => "Vianópolis",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 52,
                "name"       => "Vicentinópolis",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 52,
                "name"       => "Vila Boa",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 52,
                "name"       => "Vila Propício",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "state_id"   => 53,
                "name"       => "Brasília",
                "created_at" => $now,
                "updated_at" => $now,
            ],
        ]);
    }
}
