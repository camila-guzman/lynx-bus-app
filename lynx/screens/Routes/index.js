import { NavigationContainer } from "@react-navigation/native";
import React from "react";
import {View, Text, Button } from "react-native";

function RoutesScreen(){
    return (
        <View>
            <Button 
            title="Filters"
            onPress={() => navigation.navigate('Filters')}
            />

            <Button title="hello" />
            <Text>Routes Screen</Text>
        </View>
    );
}

export default RoutesScreen;