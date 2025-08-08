package main

import (
	"fmt"
	"io"
	"net/http"
	"os"
)

func main() {
	err := copyFile("arquivo.txt", "arquivo-copiado.txt")

	if err != nil {
		fmt.Println(err)
	}
}

func ping(url string) error {
	resp, err := http.Get(url)
	if err == nil {
		defer resp.Body.Close()
		if resp.StatusCode == 200 {
			fmt.Printf("sucesso: %d", resp.StatusCode)
			return nil
		} else {
			return fmt.Errorf("conexão falhou: Servidor retornou código %d", resp.StatusCode)
		}
	} else {
		return fmt.Errorf("erro ao conectar ao servidor: %v", err)
	}
}

func ping2(url string) error {
	resp, err := http.Get(url)
	if err != nil {
		return fmt.Errorf("erro ao conectar ao servidor: %v", err)
	}

	defer resp.Body.Close()
	if resp.StatusCode != 200 {
		return fmt.Errorf("conexão falhou: Servidor retornou código %d", resp.StatusCode)
	}

	fmt.Printf("sucesso: %d", resp.StatusCode)
	return nil
}

func copyFile(source string, destination string) error {
	if _, err := os.Stat(source); err == nil {
		if _, err := os.Stat(destination); err != nil {
			if sourceFile, err := os.Open(source); err == nil {
				defer sourceFile.Close()
				if destinationFile, err := os.Create(destination); err == nil {
					defer destinationFile.Close()
					if _, err := io.Copy(destinationFile, sourceFile); err == nil {
						fmt.Println("arquivo copiado com sucesso")
						return nil
					} else {
						return fmt.Errorf("erro ao copiar arquivo: %v", err)
					}
				} else {
					return fmt.Errorf("erro ao criar arquivo de destino: %v", err)
				}
			} else {
				return fmt.Errorf("erro ao abrir arquivo de origem: %v", err)
			}
		} else {
			return fmt.Errorf("erro: Arquivo de destino já existe")
		}
	} else {
		return fmt.Errorf("erro: Arquivo de origem não encontrado")
	}
}

func copyFile2(source string, destination string) error {
	if _, err := os.Stat(source); err != nil {
		return fmt.Errorf("erro: Arquivo de origem não encontrado")
	}

	if _, err := os.Stat(destination); err == nil {
		return fmt.Errorf("erro: Arquivo de destino já existe")
	}

	sourceFile, err := os.Open(source)
	if err != nil {
		return fmt.Errorf("erro ao abrir arquivo de origem: %v", err)
	}

	defer sourceFile.Close()

	destinationFile, err := os.Create(destination)
	if err != nil {
		return fmt.Errorf("erro ao criar arquivo de destino: %v", err)
	}

	defer destinationFile.Close()
	if _, err := io.Copy(destinationFile, sourceFile); err != nil {
		return fmt.Errorf("erro ao copiar arquivo: %v", err)
	}

	fmt.Println("Arquivo copiado com sucesso")
	return nil
}

func downloadFile(url string) ([]byte, error) {
	if url == "" {
		return nil, fmt.Errorf("erro: URL não pode ser vazia")
	}

	resp, err := http.Get(url)
	if err != nil {
		return nil, fmt.Errorf("erro ao baixar arquivo: %v", err)
	}

	defer resp.Body.Close()
	if resp.StatusCode != 200 {
		return nil, fmt.Errorf("erro: Servidor retornou código %d", resp.StatusCode)
	}

	body, err := io.ReadAll(resp.Body)
	if err != nil {
		return nil, fmt.Errorf("erro ao ler resposta: %v", err)
	}

	return body, nil
}
